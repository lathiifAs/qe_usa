<?php

namespace App\Http\Controllers;

use PDF;

use App\Models\Quality_express as ModelsQuality_express;
use App\Models\Shipper as ModelsShipper;
use App\Models\Consignee as ModelsConsignee;
use App\Models\Notify_party as ModelsNotify_party;
use App\Models\Issued_by as ModelsIssued_by;
use Illuminate\Http\Request;


// use Barryvdh\DomPDF\Facade\Pdf;
// use Illuminate\Support\Facades\App;

class Quality_express extends Controller
{
    public function index()
    {
        // $qe = ModelsQuality_express::latest()->get();
        $qe = ModelsQuality_express::join('shippers', 'quality_expresses.shipper_exporter', '=', 'shippers.id')
                ->orderBy('quality_expresses.created_at', 'desc')
                ->get(['quality_expresses.*', 'shippers.shipper']);
        return view('quality_express.index', compact('qe'));
    }

    public function create()
    {
        $shipper = ModelsShipper::latest()->get();
        $consignee = ModelsConsignee::latest()->get();
        $notify_party = ModelsNotify_party::latest()->get();
        $issued_by = Modelsissued_by::latest()->get();
        return view('quality_express.add', compact('shipper', 'consignee', 'notify_party', 'issued_by'));
    }

    public function store(Request $request)
    {
        $send = ModelsQuality_express::create([
            'shipper_exporter' => $request->shipper_exporter,
            'export_references' => $request->export_references,
            'bill_of_lading_no' => $request->bill_of_lading_no,
            'fmc_no' => $request->fmc_no,
            'no_of_original_signed' => $request->no_of_original_signed,
            'consignee' => $request->consignee,
            'for_delivery' => $request->for_delivery,
            'notify_party' => $request->notify_party,
            'also_notify' => $request->also_notify,
            'vessel_voy' => $request->vessel_voy,
            'part_of_loading' => $request->part_of_loading,
            'pier_or_place' => $request->pier_or_place,
            'type_of_move' => $request->type_of_move,
            'port_of_discharge' => $request->port_of_discharge,
            'place_of_delivery' => $request->place_of_delivery,
            'final_destination' => $request->final_destination,
            'container_no' => $request->container_no,
            // 'seal_no' => $request->shipper,
            'no_of_pkgs' => $request->no_of_pkgs,
            'kind_of_pkgs' => $request->kind_of_pkgs,
            'total_gross_weight' => $request->total_gross_weight,
            'total_measur' => $request->total_measur,
            'total_no_pkgs' => $request->total_no_pkgs,
            'freight_and_charges' => $request->freight_and_charges,
            'repaid_collect' => $request->repaid_collect,
            'place_and_date_issue' => $request->place_and_date_issue,
            'by' => $request->by,
            // 'as_agent' => $request->shipper,
        ]);

        if ($send) {
            return redirect()
                ->route('quality_express/add')
                ->with([
                    'success' => 'New send has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    public function createpdf($id)
    {
        $qe = ModelsQuality_express::leftJoin('shippers', 'quality_expresses.shipper_exporter', '=', 'shippers.id')
        ->leftJoin('consignees', 'quality_expresses.consignee', '=', 'consignees.id')
        ->leftJoin('notify_parties', 'quality_expresses.notify_party', '=', 'notify_parties.id')
        ->leftJoin('issued_bies', 'quality_expresses.for_delivery', '=', 'issued_bies.id')
        ->select('quality_expresses.*', 'shippers.*', 'consignees.*', 'notify_parties.*', 'issued_bies.*')
        ->where('quality_expresses.id', $id)
        ->first();
    	$pdf = PDF::loadview('quality_express.detail', compact('qe'));
    	return $pdf->download('Bill_of_lading_'.time().'.pdf');
    }

    public function detail($id)
    {
        // $qe = ModelsQuality_express::findOrFail($id);
        // $qe = ModelsQuality_express::join('shippers', 'quality_expresses.shipper_exporter', '=', 'shippers.id')
        // ->get(['quality_expresses.*', 'shippers.shipper'])
        // ->where('quality_expresses.id', $id);
        // $qe = ModelsQuality_express::join('shippers', function($join)
        // {
        //     $join->on('quality_expresses.shipper_exporter', '=', 'shippers.id');
        // })
        // ->where('quality_expresses.id', '=', $id)
        // ->get();

        $qe = ModelsQuality_express::leftJoin('shippers', 'quality_expresses.shipper_exporter', '=', 'shippers.id')
            ->leftJoin('consignees', 'quality_expresses.consignee', '=', 'consignees.id')
            ->leftJoin('notify_parties', 'quality_expresses.notify_party', '=', 'notify_parties.id')
            ->leftJoin('issued_bies', 'quality_expresses.for_delivery', '=', 'issued_bies.id')
            ->select('quality_expresses.*', 'shippers.*', 'consignees.*', 'notify_parties.*', 'issued_bies.*')
            ->where('quality_expresses.id', $id)
            ->first();
        return view('quality_express.detail', compact('qe'));
    }

    public function edit($id)
    {
        $shipper = ModelsShipper::latest()->get();
        $consignee = ModelsConsignee::latest()->get();
        $notify_party = ModelsNotify_party::latest()->get();
        $issued_by = Modelsissued_by::latest()->get();


        $qe = ModelsQuality_express::leftJoin('shippers', 'quality_expresses.shipper_exporter', '=', 'shippers.id')
        ->leftJoin('consignees', 'quality_expresses.consignee', '=', 'consignees.id')
        ->leftJoin('notify_parties', 'quality_expresses.notify_party', '=', 'notify_parties.id')
        ->leftJoin('issued_bies', 'quality_expresses.for_delivery', '=', 'issued_bies.id')
        ->select('quality_expresses.*', 'shippers.*', 'consignees.*', 'notify_parties.*', 'issued_bies.*')
        ->where('quality_expresses.id', $id)
        ->first();

        return view('quality_express.edit', compact('shipper', 'consignee', 'notify_party', 'issued_by', 'qe'));
    }

    public function update(Request $request)
    {
        $id = $request->id;

        $send = ModelsQuality_express::findOrFail($id);

        $send->update([
            'shipper_exporter' => $request->shipper_exporter,
            'export_references' => $request->export_references,
            'bill_of_lading_no' => $request->bill_of_lading_no,
            'fmc_no' => $request->fmc_no,
            'no_of_original_signed' => $request->no_of_original_signed,
            'consignee' => $request->consignee,
            'for_delivery' => $request->for_delivery,
            'notify_party' => $request->notify_party,
            'also_notify' => $request->also_notify,
            'vessel_voy' => $request->vessel_voy,
            'part_of_loading' => $request->part_of_loading,
            'pier_or_place' => $request->pier_or_place,
            'type_of_move' => $request->type_of_move,
            'port_of_discharge' => $request->port_of_discharge,
            'place_of_delivery' => $request->place_of_delivery,
            'final_destination' => $request->final_destination,
            'container_no' => $request->container_no,
            // 'seal_no' => $request->shipper,
            'no_of_pkgs' => $request->no_of_pkgs,
            'kind_of_pkgs' => $request->kind_of_pkgs,
            'total_gross_weight' => $request->total_gross_weight,
            'total_measur' => $request->total_measur,
            'total_no_pkgs' => $request->total_no_pkgs,
            'freight_and_charges' => $request->freight_and_charges,
            'repaid_collect' => $request->repaid_collect,
            'place_and_date_issue' => $request->place_and_date_issue,
            'by' => $request->by,
        ]);

        if ($send) {
            return redirect()
            ->route('quality_express/edit', $id)
            ->with([
                'success' => 'New send has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

    public function destroy(Request $request)
    {
        $send = ModelsQuality_express::findOrFail($request->id);
        $send->delete();

        if ($send) {
            return redirect()
            ->route('quality_express/index')
            ->with([
                'success' => 'New send has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }

}

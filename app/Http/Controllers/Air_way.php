<?php

namespace App\Http\Controllers;

use PDF;

use App\Models\Air_way as ModelsAirway;
use App\Models\Shipper as ModelsShipper;
use App\Models\Consignee as ModelsConsignee;
use App\Models\Notify_party as ModelsNotify_party;
use App\Models\Issued_by as ModelsIssued_by;
use Illuminate\Http\Request;


// use Barryvdh\DomPDF\Facade\Pdf;
// use Illuminate\Support\Facades\App;

class Air_way extends Controller
{
    public function index()
    {
        $aw = ModelsAirway::latest()->get();
        // $aw = ModelsAirway::join('shippers', 'air_ways.shipper_exporter', '=', 'shippers.id')
        //         ->orderBy('air_ways.created_at', 'desc')
        //         ->get(['air_ways.*', 'shippers.shipper']);
        return view('air_way.index', compact('aw'));
        // return view('air_way.index');
    }

    public function create()
    {
        $shipper = ModelsShipper::latest()->get();
        $consignee = ModelsConsignee::latest()->get();
        $notify_party = ModelsNotify_party::latest()->get();
        $issued_by = Modelsissued_by::latest()->get();
        return view('air_way.add', compact('shipper', 'consignee', 'notify_party', 'issued_by'));
    }

    public function store(Request $request)
    {
        $send = ModelsAirway::create([
            'shipper_name_address' => $request->shipper_name_address,
            'shipper_account_number' => $request->shipper_account_number,
            'issued_by' => $request->issued_by,
            'consignee_name_address' => $request->consignee_name_address,
            'issuing_carrier' => $request->issuing_carrier,
            'accounting_information' => $request->accounting_information,
            'agents_iata_cd' => $request->agents_iata_cd,
            'account_no' => $request->account_no,
            'airport_of_departure' => $request->airport_of_departure,
            'to' => $request->to,
            'by_first_carrier' => $request->by_first_carrier,
            'to_2' => $request->to_2,
            'by' => $request->by,
            'to_3' => $request->to_3,
            'by_2' => $request->by_2,
            'currency' => $request->currency,
            'chos_cd' => $request->chos_cd,
            'wtnal_pdd' => $request->wtnal_pdd,
            'wtnal_coll' => $request->wtnal_coll,
            'qnay_pdd' => $request->qnay_pdd,
            'qnay_coll' => $request->qnay_coll,
            'declared_carriage' => $request->declared_carriage,
            'declared_costums' => $request->declared_costums,
            'airport_of_destination' => $request->airport_of_destination,
            'start_flight_date' => $request->start_flight_date,
            'end_flight_date' => $request->end_flight_date,
            'amount_of_insurance' => $request->amount_of_insurance,
            'handling_information' => $request->handling_information,
            'no_of_pieces' => $request->no_of_pieces,
            'gross_weight' => $request->gross_weight,
            'kglg' => $request->kglg,
            'commodity_item' => $request->commodity_item,
            'chargeable_weight' => $request->chargeable_weight,
            'rate_charge' => $request->rate_charge,
            'total' => $request->total,
            'nature_and_qty' => $request->nature_and_qty,
            'prepaid' => $request->prepaid,
            'collect' => $request->collect,
            'start_valuation_charge' => $request->start_valuation_charge,
            'end_valuation_charge' => $request->end_valuation_charge,
            'start_tax' => $request->start_tax,
            'end_tax' => $request->end_tax,
            'start_total_charge_agent' => $request->start_total_charge_agent,
            'end_total_charge_agent' => $request->end_total_charge_agent,
            'start_total_charge_carrier' => $request->start_total_charge_carrier,
            'end_total_charge_carrier' => $request->end_total_charge_carrier,
            'total_repaid' => $request->total_repaid,
            'total_collect' => $request->total_collect,
            'charges_desti' => $request->charges_desti,
            'cc_charges' => $request->cc_charges,
            'current_conversion' => $request->current_conversion,
            'other_charges' => $request->other_charges,
            'total_collect_charges' => $request->total_collect_charges,
            'executed_date' => $request->executed_date,
            'at_place' => $request->at_place,
            'signature_of_shipper' => $request->signature_of_shipper,
            'signature_of_issue' => $request->signature_of_issue,
            // 'as_agent' => $request->shipper,
        ]);

        if ($send) {
            return redirect()
                ->route('air_way/add')
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
        $aw = ModelsAirway::leftJoin('shippers', 'air_ways.shipper_exporter', '=', 'shippers.id')
        ->leftJoin('consignees', 'air_ways.consignee', '=', 'consignees.id')
        ->leftJoin('notify_parties', 'air_ways.notify_party', '=', 'notify_parties.id')
        ->leftJoin('issued_bies', 'air_ways.for_delivery', '=', 'issued_bies.id')
        ->select('air_ways.*', 'shippers.*', 'consignees.*', 'notify_parties.*', 'issued_bies.*')
        ->where('air_ways.id', $id)
        ->first();
    	$pdf = PDF::loadview('air_way.detail', compact('aw'));
    	return $pdf->download('Bill_of_lading_'.time().'.pdf');
    }

    public function detail($id)
    {
        // $aw = ModelsAirway::findOrFail($id);
        // $aw = ModelsAirway::join('shippers', 'air_ways.shipper_exporter', '=', 'shippers.id')
        // ->get(['air_ways.*', 'shippers.shipper'])
        // ->where('air_ways.id', $id);
        // $aw = ModelsAirway::join('shippers', function($join)
        // {
        //     $join->on('air_ways.shipper_exporter', '=', 'shippers.id');
        // })
        // ->where('air_ways.id', '=', $id)
        // ->get();

        $aw = ModelsAirway::leftJoin('shippers', 'air_ways.shipper_exporter', '=', 'shippers.id')
            ->leftJoin('consignees', 'air_ways.consignee', '=', 'consignees.id')
            ->leftJoin('notify_parties', 'air_ways.notify_party', '=', 'notify_parties.id')
            ->leftJoin('issued_bies', 'air_ways.for_delivery', '=', 'issued_bies.id')
            ->select('air_ways.*', 'shippers.*', 'consignees.*', 'notify_parties.*', 'issued_bies.*')
            ->where('air_ways.id', $id)
            ->first();
        return view('air_way.detail', compact('aw'));
    }

    public function edit($id)
    {
        $shipper = ModelsShipper::latest()->get();
        $consignee = ModelsConsignee::latest()->get();
        $notify_party = ModelsNotify_party::latest()->get();
        $issued_by = Modelsissued_by::latest()->get();


        $aw = ModelsAirway::leftJoin('shippers', 'air_ways.shipper_exporter', '=', 'shippers.id')
        ->leftJoin('consignees', 'air_ways.consignee', '=', 'consignees.id')
        ->leftJoin('notify_parties', 'air_ways.notify_party', '=', 'notify_parties.id')
        ->leftJoin('issued_bies', 'air_ways.for_delivery', '=', 'issued_bies.id')
        ->select('air_ways.*', 'shippers.*', 'consignees.*', 'notify_parties.*', 'issued_bies.*')
        ->where('air_ways.id', $id)
        ->first();

        return view('air_way.edit', compact('shipper', 'consignee', 'notify_party', 'issued_by', 'aw'));
    }

    public function update(Request $request)
    {
        $id = $request->id;

        $send = ModelsAirway::findOrFail($id);

        $send->update([
            'shipper_name_address' => $request->shipper_name_address,
            'shipper_account_number' => $request->shipper_account_number,
            'issued_by' => $request->issued_by,
            'consignee_name_address' => $request->consignee_name_address,
            'issuing_carrier' => $request->issuing_carrier,
            'accounting_information' => $request->accounting_information,
            'agents_iata_cd' => $request->agents_iata_cd,
            'account_no' => $request->account_no,
            'airport_of_departure' => $request->airport_of_departure,
            'to' => $request->to,
            'by_first_carrier' => $request->by_first_carrier,
            'to_2' => $request->to_2,
            'by' => $request->by,
            'to_3' => $request->to_3,
            'by_2' => $request->by_2,
            'currency' => $request->currency,
            'chos_cd' => $request->chos_cd,
            'wtnal_pdd' => $request->wtnal_pdd,
            'wtnal_coll' => $request->wtnal_coll,
            'qnay_pdd' => $request->qnay_pdd,
            'qnay_coll' => $request->qnay_coll,
            'declared_carriage' => $request->declared_carriage,
            'declared_costums' => $request->declared_costums,
            'airport_of_destination' => $request->airport_of_destination,
            'start_flight_date' => $request->start_flight_date,
            'end_flight_date' => $request->end_flight_date,
            'amount_of_insurance' => $request->amount_of_insurance,
            'handling_information' => $request->handling_information,
            'no_of_pieces' => $request->no_of_pieces,
            'gross_weight' => $request->gross_weight,
            'kglg' => $request->kglg,
            'commodity_item' => $request->commodity_item,
            'chargeable_weight' => $request->chargeable_weight,
            'rate_charge' => $request->rate_charge,
            'total' => $request->total,
            'nature_and_qty' => $request->nature_and_qty,
            'prepaid' => $request->prepaid,
            'collect' => $request->collect,
            'start_valuation_charge' => $request->start_valuation_charge,
            'end_valuation_charge' => $request->end_valuation_charge,
            'start_tax' => $request->start_tax,
            'end_tax' => $request->end_tax,
            'start_total_charge_agent' => $request->start_total_charge_agent,
            'end_total_charge_agent' => $request->end_total_charge_agent,
            'start_total_charge_carrier' => $request->start_total_charge_carrier,
            'end_total_charge_carrier' => $request->end_total_charge_carrier,
            'total_repaid' => $request->total_repaid,
            'total_collect' => $request->total_collect,
            'charges_desti' => $request->charges_desti,
            'other_charges' => $request->other_charges,
            'total_collect_charges' => $request->total_collect_charges,
            'executed_date' => $request->executed_date,
            'at_place' => $request->at_place,
            'signature_of_shipper' => $request->signature_of_shipper,
            'signature_of_issue' => $request->signature_of_issue,
        ]);

        if ($send) {
            return redirect()
            ->route('air_way/edit', $id)
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
        $send = ModelsAirway::findOrFail($request->id);
        $send->delete();

        if ($send) {
            return redirect()
            ->route('air_way/index')
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

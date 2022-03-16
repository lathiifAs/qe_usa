<?php

namespace App\Http\Controllers;

use App\Models\Consignee as ModelsConsignee;
use Illuminate\Http\Request;

class Consignee extends Controller
{
    //
    public function index()
    {
        $consignee = ModelsConsignee::latest()->get();
        return view('consignee.index', compact('consignee'));
    }

    public function create()
    {
        // $qe = ModelsConsignee::latest()->get();
        // print_r($insurance);die;
        // return view('admin.consignee.index', compact('qe'));
        return view('consignee.add');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'consignee' => 'required',
        ]);

        $send = ModelsConsignee::create([
            'consignee' => $request->consignee,
        ]);

        if ($send) {
            return redirect()
                ->route('master/consignee/add')
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

    public function destroy(Request $request)
    {
        $send = ModelsConsignee::findOrFail($request->id);
        $send->delete();

        if ($send) {
            return redirect()
            ->route('master/consignee')
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

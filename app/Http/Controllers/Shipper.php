<?php

namespace App\Http\Controllers;

use App\Models\Shipper as ModelsShipper;
use Illuminate\Http\Request;

class Shipper extends Controller
{
    //
    public function index()
    {
        $shipper = ModelsShipper::latest()->get();
        return view('shipper.index', compact('shipper'));
    }

    public function create()
    {
        // $qe = ModelsShipper::latest()->get();
        // print_r($insurance);die;
        // return view('admin.Shipper.index', compact('qe'));
        return view('shipper.add');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'shipper' => 'required',
        ]);

        $send = ModelsShipper::create([
            'shipper' => $request->shipper,
        ]);

        if ($send) {
            return redirect()
                ->route('master/shipper/add')
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
        $send = ModelsShipper::findOrFail($request->id);
        $send->delete();

        if ($send) {
            return redirect()
            ->route('master/shipper')
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

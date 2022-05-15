<?php

namespace App\Http\Controllers;

use App\Models\For_delivery as ModelsFor_delivery;
use Illuminate\Http\Request;

class For_delivery extends Controller
{
    //
    public function index()
    {
        $for_delivery = ModelsFor_delivery::latest()->get();
        return view('for_delivery.index', compact('for_delivery'));
    }

    public function create()
    {
        // $qe = ModelsFor_delivery::latest()->get();
        // print_r($insurance);die;
        // return view('admin.for_delivery.index', compact('qe'));
        return view('for_delivery.add');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'for_delivery' => 'required',
        ]);

        $send = ModelsFor_delivery::create([
            'for_delivery' => $request->for_delivery,
        ]);

        if ($send) {
            return redirect()
                ->route('master/for_delivery/add')
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
        $send = ModelsFor_delivery::findOrFail($request->id);
        $send->delete();

        if ($send) {
            return redirect()
            ->route('master/for_delivery')
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

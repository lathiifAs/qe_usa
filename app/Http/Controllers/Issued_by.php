<?php

namespace App\Http\Controllers;

use App\Models\Issued_by as ModelsIssued_by;
use Illuminate\Http\Request;

class Issued_by extends Controller
{
    //
    public function index()
    {
        $issued_by = ModelsIssued_by::latest()->get();
        return view('issued_by.index', compact('issued_by'));
    }

    public function create()
    {
        // $qe = ModelsIssued_by::latest()->get();
        // print_r($insurance);die;
        // return view('admin.issued_by.index', compact('qe'));
        return view('issued_by.add');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'issued_by' => 'required',
        ]);

        $send = ModelsIssued_by::create([
            'issued_by' => $request->issued_by,
        ]);

        if ($send) {
            return redirect()
                ->route('master/issued_by/add')
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
        $send = ModelsIssued_by::findOrFail($request->id);
        $send->delete();

        if ($send) {
            return redirect()
            ->route('master/issued_by')
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

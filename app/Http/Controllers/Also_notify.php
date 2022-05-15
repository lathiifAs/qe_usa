<?php

namespace App\Http\Controllers;

use App\Models\Also_notify as ModelsAlso_notify;
use Illuminate\Http\Request;

class Also_notify extends Controller
{
    //
    public function index()
    {
        $also_notify = ModelsAlso_notify::latest()->get();
        return view('also_notify.index', compact('also_notify'));
    }

    public function create()
    {
        // $qe = ModelsAlso_notify::latest()->get();
        // print_r($insurance);die;
        // return view('admin.also_notify.index', compact('qe'));
        return view('also_notify.add');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'also_notify' => 'required',
        ]);

        $send = ModelsAlso_notify::create([
            'also_notify' => $request->also_notify,
        ]);

        if ($send) {
            return redirect()
                ->route('master/also_notify/add')
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
        $send = ModelsAlso_notify::findOrFail($request->id);
        $send->delete();

        if ($send) {
            return redirect()
            ->route('master/also_notify')
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

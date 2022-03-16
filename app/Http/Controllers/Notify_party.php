<?php

namespace App\Http\Controllers;

use App\Models\Notify_party as ModelsNotify_party;
use Illuminate\Http\Request;

class Notify_party extends Controller
{
    //
    public function index()
    {
        $notify_party = ModelsNotify_party::latest()->get();
        return view('notify_party.index', compact('notify_party'));
    }

    public function create()
    {
        // $qe = ModelsNotify_party::latest()->get();
        // print_r($insurance);die;
        // return view('admin.notify_party.index', compact('qe'));
        return view('notify_party.add');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'notify_party' => 'required',
        ]);

        $send = ModelsNotify_party::create([
            'notify_party' => $request->notify_party,
        ]);

        if ($send) {
            return redirect()
                ->route('master/notify_party/add')
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
        $send = ModelsNotify_party::findOrFail($request->id);
        $send->delete();

        if ($send) {
            return redirect()
            ->route('master/notify_party')
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


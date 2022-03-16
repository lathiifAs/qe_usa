<?php

namespace App\Http\Controllers;

use App\Models\Quality_express as ModelsQuality_express;
use Illuminate\Http\Request;

class Quality_express extends Controller
{
    public function index()
    {
        // $qe = ModelsQuality_express::latest()->get();
        // print_r($insurance);die;
        // return view('admin.quality_express.index', compact('qe'));
        return view('quality_express.index');
    }

}

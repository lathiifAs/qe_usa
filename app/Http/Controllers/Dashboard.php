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

class Dashboard extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

}

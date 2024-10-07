<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Datawbp;

//import return type View
use App\Models\Trolling;

//import return type redirectResponse
use Illuminate\View\View;

//import Http Request
use Illuminate\Http\Request;

//import Facades Storage
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class SpreadsheetController extends Controller
{

    public function updatepenghuni() : View
    {
        //render view
        return view('spreadsheet.updatepenghuni');
    }


    public function lokasi() : View
    {
        //render view
        $datawbps = Datawbp::get();
        return view('spreadsheet.lokasi', compact('datawbps'));
    }


}

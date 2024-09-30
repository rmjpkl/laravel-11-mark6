<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Trolling;

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\Request;

//import Http Request
use Illuminate\Http\RedirectResponse;

//import Facades Storage
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
        return view('spreadsheet.lokasi');
    }


}

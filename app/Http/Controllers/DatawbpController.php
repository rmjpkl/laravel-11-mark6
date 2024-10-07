<?php

namespace App\Http\Controllers;

use App\Models\Datawbp;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Imports\DatawbpsImport;
use Maatwebsite\Excel\Facades\Excel;

class DatawbpController extends Controller
{

    public function index() : View
    {
        //get all datawbps
        $datawbps = Datawbp::get();
        // dd($datawbps);

        //render view with datawbps
        return view('datawbps.index', compact('datawbps'));
    }

    public function create(): View
    {
        return view('datawbps.import');
    }

    public function import(Request $request)
    {
        // Validasi file
        $request->validate([
            'file' => 'required|mimes:csv,txt',
        ]);
        // dd($request);

        // Hapus data lama
        Datawbp::truncate();

        // Impor data baru
        Excel::import(new DatawbpsImport, $request->file('file'));

        return redirect()->route('datawbps.index')->with(['success' => 'Data Berhasil Update!']);
    }


    
}

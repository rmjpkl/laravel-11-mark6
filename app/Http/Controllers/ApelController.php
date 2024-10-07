<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Point;


//import return type redirectResponse
use App\Models\Datawbp;

//import Http Request
use Illuminate\View\View;

//import Facades Storage
use App\Models\Pelanggaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ApelController extends Controller
{


    /**
     * index
     *
     * @return void
     */


    public function index() : View
    {

        //render view with products
        return view('apels.index');
    }


    public function bloka() : View
    {
        //render view with products
        return view('apels.a');
    }

    public function blokb() : View
    {
        //render view with products
        return view('apels.b');
    }
    public function blokc() : View
    {
        //render view with products
        return view('apels.c');
    }
    public function blokd() : View
    {
        //render view with products
        return view('apels.d');
    }
    public function bloke() : View
    {
        //render view with products
        return view('apels.e');
    }
    public function blokf() : View
    {
        //render view with products
        return view('apels.f');
    }





    
    
    public function kamar(Request $request) : View
    {
        $filter = $request->input('filter', 'A.1'); // Default filter is 'A.1'
       
    //    mengambil data dari spreadsheet
    //     $spreadsheetId = '1JuiFZuixecGygvTi1NUZ5p_BkvKluov31g9z26gitJ0';
    //     $apiKey = 'AIzaSyD8yvaiWF3p4ohg2040C4xrwMDqc_cfiI0';
    //     $url = "https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/?key={$apiKey}&includeGridData=true";

    //     $response = Http::get($url);
    //     $sheets = $response->json()['sheets'];
    //     $firstSheet = $sheets[0];
    //     $data = collect($firstSheet['data'][0]['rowData'])
    //         ->skip(1) // Skip the first row (column names)
    //         ->map(function ($row) {
    //             return [
    //                 'nama' => $row['values'][0]['formattedValue'] ?? null,
    //                 'lokasi' => $row['values'][1]['formattedValue'] ?? null,
    //             ];
    //         }); 

    //  $filteredData = $data->filter(function ($row) use ($filter) {
    //             return $row['lokasi'] === $filter;
    //         });

     $data = Datawbp::get();

     $data = Datawbp::where('lokasi', $filter)->orderBy('created_at', 'desc')->get();


    return view('apels.kamar', ['data' => $data, 'filter' => $filter]);
}

public function store(Request $request)
    {
        $selectedData = $request->input('selected_data', []);
        $rupam = $request->input('rupam');
        $pelanggaran_id = $request->input('pelanggaran_id');

        $filter = $request->input('filter');
        $parts = explode('.', $filter);
        $newFilterRight = $parts[0] . '.' . ($parts[1] + 1);

        foreach ($selectedData as $nama) {
            DB::table('points')->insert([
                'nama' => $nama,
                'pelanggaran_id' => $pelanggaran_id,
                'rupam' => $rupam,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->route('kamar', ['filter' => $newFilterRight])->with('success', 'Data berhasil ditambahkan!');
    }



}

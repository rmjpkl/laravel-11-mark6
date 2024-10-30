<?php

namespace App\Http\Controllers;

use App\Models\Datawbp;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Imports\DatawbpsImport;
use Illuminate\Support\Facades\Http;
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

    public function updateDariSpreadsheet(Request $request)
{
    // Validasi file
    // Mengambil data dari spreadsheet
    $spreadsheetId = '1JuiFZuixecGygvTi1NUZ5p_BkvKluov31g9z26gitJ0';
    $apiKey = 'AIzaSyD8yvaiWF3p4ohg2040C4xrwMDqc_cfiI0';
    $url = "https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/?key={$apiKey}&includeGridData=true";
    $response = Http::get($url);
    $sheets = $response->json()['sheets'];
    $firstSheet = $sheets[0];
    $data = collect($firstSheet['data'][0]['rowData'])
        ->skip(1) // Lewati baris pertama (nama kolom)
        ->map(function ($row) {
            return [
                'nama' => $row['values'][0]['formattedValue'] ?? null,
                'lokasi' => $row['values'][1]['formattedValue'] ?? null,
                'tn' => $row['values'][2]['formattedValue'] ?? null,
                'tanggal_masuk' => $row['values'][3]['formattedValue'] ?? null,
                'status' => 1, // Set default value to 1
            ];
        })
        ->filter(function ($row) {
            return !is_null($row['nama']); // Filter out rows where 'nama' is null
        });

    // Hapus data lama
    Datawbp::truncate();

    // Insert data ke dalam tabel Datawbp
    foreach ($data as $row) {
        Datawbp::create([
            'nama' => $row['nama'],
            'lokasi' => $row['lokasi'],
            'tn' => $row['tn'],
            'tanggal_masuk' => $row['tanggal_masuk'],
            'status' => $row['status'], // This will always be 1
        ]);
    }

    return redirect()->route('datawbps.index')->with(['success' => 'Data Berhasil Update!']);
}
  


    
}

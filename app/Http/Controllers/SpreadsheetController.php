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

    public function updatepenghuni(): View
    {
        // Mengambil semua data
        $data = Datawbp::get();

        // Deklarasi array untuk menampung hasil perhitungan
        $jumlahData = [];

        // Daftar jumlah baris untuk tiap tabel
        $tableRanges = [
            'A' => 5,
            'B' => 15,
            'C' => 14,
            'D' => 15,
            'E' => 14,
            'F' => 8
        ];

        // Loop untuk mengurangi redundansi
        foreach ($tableRanges as $alphabet => $range) {
            for ($i = 1; $i <= $range; $i++) {
                $lokasi = "{$alphabet}.{$i}";
                $jumlahData[$lokasi]['T'] = Datawbp::where('lokasi', $lokasi)->where('tn', 'T')->count();
                $jumlahData[$lokasi]['N'] = Datawbp::where('lokasi', $lokasi)->where('tn', 'N')->count();
                $jumlahData[$lokasi]['total'] = $jumlahData[$lokasi]['T'] + $jumlahData[$lokasi]['N'];
            }
        }

        return view('spreadsheet.updatepenghuni', compact('data', 'jumlahData'));
    }





    public function lokasi(): View
    {
        //render view
        $datawbps = Datawbp::get();
        return view('spreadsheet.lokasi', compact('datawbps'));
    }
}

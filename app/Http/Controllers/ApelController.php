<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Point;


//import return type redirectResponse
use Illuminate\View\View;

//import Http Request
use Illuminate\Http\Request;

//import Facades Storage
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
    $spreadsheetId = '1JuiFZuixecGygvTi1NUZ5p_BkvKluov31g9z26gitJ0';
    $apiKey = 'AIzaSyD8yvaiWF3p4ohg2040C4xrwMDqc_cfiI0';
    $url = "https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/?key={$apiKey}&includeGridData=true";

    $response = Http::get($url);
    $sheets = $response->json()['sheets'];
    $firstSheet = $sheets[0];
    $data = collect($firstSheet['data'][0]['rowData'])
        ->skip(1) // Skip the first row (column names)
        ->map(function ($row) {
            return [
                'nama' => $row['values'][0]['formattedValue'] ?? null,
                'kamar' => $row['values'][1]['formattedValue'] ?? null,
            ];
        });

    $filter = $request->input('filter', 'A.1'); // Default filter is 'A.1'
    $filteredData = $data->filter(function ($row) use ($filter) {
        return $row['kamar'] === $filter;
    });

    return view('apels.kamar', ['data' => $filteredData, 'filter' => $filter]);
}



}

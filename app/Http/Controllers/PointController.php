<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Point;
use Illuminate\View\View;
//import return type redirectResponse
use App\Models\Pelanggaran;

//import Http Request
use Illuminate\Http\Request;

//import Facades Storage
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PointController extends Controller
{
    public function index() : View
    {
        //get all products
        $points = Point::orderBy('created_at', 'desc')->get();

        //render view with products
        return view('point.index', compact('points'));
    }

    public function create(): View
    {

        $spreadsheetId = '1JuiFZuixecGygvTi1NUZ5p_BkvKluov31g9z26gitJ0';
        $apiKey = 'AIzaSyD8yvaiWF3p4ohg2040C4xrwMDqc_cfiI0';
        $url = "https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/?key={$apiKey}&includeGridData=true";

        $response = Http::get($url);
        $sheets = $response->json()['sheets'];
        $firstSheet = $sheets[0];
        $datas = collect($firstSheet['data'][0]['rowData'])
            ->skip(1) // Skip the first row (column names)
            ->map(function ($row) {
                return [
                    'nama' => $row['values'][0]['formattedValue'] ?? null,
                    'kamar' => $row['values'][1]['formattedValue'] ?? null,
                ];
            });

    $pelanggarans = Pelanggaran::all();
    return view('point.create', compact('pelanggarans' , 'datas')) ;
    }



    public function store(Request $request)
    {
        // dd($request);
         // validate form
         $request->validate([
            'nama'           => 'required',
            'pelanggaran_id' => 'required',
            'rupam'          => 'required'
        ]);


        Point::create([
            'nama'           => $request->nama,
            'pelanggaran_id' => $request->pelanggaran_id,
            'rupam'          => $request->rupam
        ]);

        //redirect to index
        return redirect()->route('points.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $nama): View
{
    //get product by name
    $points = Point::where('nama', $nama)->get();
    // var_dump($points);
    // die();

    //render view with product
    return view('point.show', compact('points'));
}




    public function destroy($id): RedirectResponse
    {
        //get point by ID
        $points = Point::findOrFail($id);

        // //delete image
        // Storage::delete('public/products/'. $product->image);

        //delete product
        $points->delete();

        //redirect to index
        return redirect()->route('points.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }


}

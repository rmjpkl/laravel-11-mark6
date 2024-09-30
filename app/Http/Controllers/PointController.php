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

class PointController extends Controller
{
    public function index() : View
    {
        //get all products
        $points = Point::all();

        //render view with products
        return view('point.home', compact('points'));
    }



    public function store(Request $request)
    {
        $selectedData = $request->input('selected_data', []);
        $rupam = $request->input('rupam');

        $filter = $request->input('filter');
        $parts = explode('.', $filter);
        $newFilterRight = $parts[0] . '.' . ($parts[1] + 1);

        foreach ($selectedData as $nama) {
            DB::table('points')->insert([
                'nama' => $nama,
                'point' => 1, // Misalnya, setiap data yang ditambahkan mendapatkan 10 poin
                'tanggal' => now(),
                'rupam' => $rupam,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return redirect()->route('kamar', ['filter' => $newFilterRight])->with('success', 'Data berhasil ditambahkan!');
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

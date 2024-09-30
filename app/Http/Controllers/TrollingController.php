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

class TrollingController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all trolling
        $trollings = Trolling::orderBy('created_at', 'desc')->get();

        //render view with trolling
        return view('trolling.index', compact('trollings'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('trolling.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        // validate form
        $request->validate([
            'nama_lokasi'        => 'required|min:5',
            'tanggal'            => 'required|min:5',
            'jam'                => 'required|min:5',
            'rupam'              => 'required|min:5',
            'petugas'            => 'required|min:5',
            'koordinat'          => 'required|min:5'
        ]);

        // //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/products', $image->hashName());
        // dd($request);
        //create product
        Trolling::create([
            'nama_lokasi' => $request->nama_lokasi,
            'tanggal'     => $request->tanggal,
            'tanggal'     => $request->tanggal,
            'jam'         => $request->jam,
            'rupam'       => $request->rupam,
            'petugas'     => $request->petugas,
            'koordinat'   => $request->koordinat
        ]);

        //redirect to index
        return redirect()->route('trollings.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get product by ID
        $trolling = Trolling::findOrFail($id);

        //render view with product
        return view('trolling.show', compact('trolling'));
    }

    // /**
    //  * edit
    //  *
    //  * @param  mixed $id
    //  * @return View
    //  */
    // public function edit(string $id): View
    // {
    //     //get product by ID
    //     $product = Product::findOrFail($id);

    //     //render view with product
    //     return view('products.edit', compact('product'));
    // }

    // /**
    //  * update
    //  *
    //  * @param  mixed $request
    //  * @param  mixed $id
    //  * @return RedirectResponse
    //  */
    // public function update(Request $request, $id): RedirectResponse
    // {
    //     //validate form
    //     $request->validate([
    //         'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
    //         'title'         => 'required|min:5',
    //         'description'   => 'required|min:10',
    //         'price'         => 'required|numeric',
    //         'stock'         => 'required|numeric'
    //     ]);

    //     //get product by ID
    //     $product = Product::findOrFail($id);

    //     //check if image is uploaded
    //     if ($request->hasFile('image')) {

    //         //upload new image
    //         $image = $request->file('image');
    //         $image->storeAs('public/products', $image->hashName());

    //         //delete old image
    //         Storage::delete('public/products/'.$product->image);

    //         //update product with new image
    //         $product->update([
    //             'image'         => $image->hashName(),
    //             'title'         => $request->title,
    //             'description'   => $request->description,
    //             'price'         => $request->price,
    //             'stock'         => $request->stock
    //         ]);

    //     } else {

    //         //update product without image
    //         $product->update([
    //             'title'         => $request->title,
    //             'description'   => $request->description,
    //             'price'         => $request->price,
    //             'stock'         => $request->stock
    //         ]);
    //     }

    //     //redirect to index
    //     return redirect()->route('products.index')->with(['success' => 'Data Berhasil Diubah!']);
    // }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        //get trolling by ID
        $trolling = trolling::findOrFail($id);

        // //delete image
        // Storage::delete('public/trollings/'. $trolling->image);

        //delete trolling
        $trolling->delete();

        //redirect to index
        return redirect()->route('trollings.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

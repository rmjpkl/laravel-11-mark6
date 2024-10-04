<?php

namespace App\Http\Controllers;

//import model product
use App\Models\Pelanggaran;

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\Request;

//import Http Request
use Illuminate\Http\RedirectResponse;

//import Facades Storage
use Illuminate\Support\Facades\Storage;

class PelanggaranController extends Controller
{
   /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all pelanggaran
        $pelanggarans = pelanggaran::orderBy('created_at', 'desc')->get();

        //render view with pelanggaran
        return view('pelanggaran.index', compact('pelanggarans'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('pelanggaran.create');
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
            'name'        => 'required|min:5',
            'point'       => 'required|min:1'
        ]);

        // //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/products', $image->hashName());
        // dd($request);
        //create product
        pelanggaran::create([
            'name'  => $request->name,
            'point' => $request->point
        ]);

        //redirect to index
        return redirect()->route('pelanggarans.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $pelanggaran = pelanggaran::findOrFail($id);

        //render view with product
        return view('pelanggaran.show', compact('pelanggaran'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get pelanggaran by ID
        $pelanggaran = pelanggaran::findOrFail($id);

        //render view with pelanggaran
        return view('pelanggaran.edit', compact('pelanggaran'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'name'        => 'required|min:5',
            'point'       => 'required|min:1'
        ]);

        //get pelanggaran by ID
        $pelanggaran = pelanggaran::findOrFail($id);

        //check if image is uploaded
       

            //update pelanggaran with new image
            $pelanggaran->update([
                'name'  => $request->name,
                'point' => $request->point
            ]);

      

        //redirect to index
        return redirect()->route('pelanggarans.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        //get pelanggaran by ID
        $pelanggaran = pelanggaran::findOrFail($id);

        // //delete image
        // Storage::delete('public/pelanggarans/'. $pelanggaran->image);

        //delete pelanggaran
        $pelanggaran->delete();

        //redirect to index
        return redirect()->route('pelanggarans.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

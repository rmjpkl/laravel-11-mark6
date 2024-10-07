<?php

namespace App\Http\Controllers;

use App\Models\Datawbp;
use Illuminate\View\View;
use Illuminate\Http\Request;

class DatawbpController extends Controller
{
     /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all datawbps
        $datawbps = Datawbp::get();
        // dd($datawbps);

        //render view with datawbps
        return view('datawbps.index', compact('datawbps'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('datawbps.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'image'         => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10',
            'price'         => 'required|numeric',
            'stock'         => 'required|numeric'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/datawbps', $image->hashName());

        //create datawbp
        datawbp::create([
            'image'         => $image->hashName(),
            'title'         => $request->title,
            'description'   => $request->description,
            'price'         => $request->price,
            'stock'         => $request->stock
        ]);

        //redirect to index
        return redirect()->route('datawbps.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get datawbp by ID
        $datawbp = datawbp::findOrFail($id);

        //render view with datawbp
        return view('datawbps.show', compact('datawbp'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get datawbp by ID
        $datawbp = datawbp::findOrFail($id);

        //render view with datawbp
        return view('datawbps.edit', compact('datawbp'));
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
            'image'         => 'image|mimes:jpeg,jpg,png|max:2048',
            'title'         => 'required|min:5',
            'description'   => 'required|min:10',
            'price'         => 'required|numeric',
            'stock'         => 'required|numeric'
        ]);

        //get datawbp by ID
        $datawbp = datawbp::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/datawbps', $image->hashName());

            //delete old image
            Storage::delete('public/datawbps/'.$datawbp->image);

            //update datawbp with new image
            $datawbp->update([
                'image'         => $image->hashName(),
                'title'         => $request->title,
                'description'   => $request->description,
                'price'         => $request->price,
                'stock'         => $request->stock
            ]);

        } else {

            //update datawbp without image
            $datawbp->update([
                'title'         => $request->title,
                'description'   => $request->description,
                'price'         => $request->price,
                'stock'         => $request->stock
            ]);
        }

        //redirect to index
        return redirect()->route('datawbps.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        //get datawbp by ID
        $datawbp = datawbp::findOrFail($id);

        //delete image
        Storage::delete('public/datawbps/'. $datawbp->image);

        //delete datawbp
        $datawbp->delete();

        //redirect to index
        return redirect()->route('datawbps.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}

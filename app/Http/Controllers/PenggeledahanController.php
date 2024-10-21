<?php

namespace App\Http\Controllers;

//import model Penggeledahan
use App\Models\Penggeledahan;

//import return type View
use Illuminate\View\View;

//import return type redirectResponse
use Illuminate\Http\Request;

//import Http Request
use Illuminate\Http\RedirectResponse;

//import Facades Storage
use Illuminate\Support\Facades\Storage;

class PenggeledahanController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index() : View
    {
        //get all Penggeledahans
        $Penggeledahans = Penggeledahan::latest()->paginate(10);

        //render view with Penggeledahans
        return view('Penggeledahans.index', compact('Penggeledahans'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('Penggeledahans.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
{
    // dd($request);

    // Validate form
    $request->validate([
        'rupam'           => 'required',
        'blok'            => 'required',
        'kamar'           => 'required',
        'hari'            => 'required',
        'tanggal'         => 'required',
        'jam_mulai'       => 'required',
        'jam_akhir'       => 'required',
        'petugas'         => 'required',
        'sajam'           => 'required',
        'hp'              => 'required',
        'narkoba'         => 'required',
        'hasil_razia'     => 'required',
        'image_1'         => 'required',
        'image_2'         => 'required',
        'image_3'         => 'required',
        'image_4'         => 'required',
    ]);

    // Handle image uploads with hashName
    $image1 = $request->file('image_1')->store('public/penggeledahans', 'public');
    // dd($image1);
    $image2 = $request->file('image_2')->store('public/penggeledahans', 'public');
    $image3 = $request->file('image_3')->store('public/penggeledahans', 'public');
    $image4 = $request->file('image_4')->store('public/penggeledahans', 'public');
    // dd($image1);

    // Create Penggeledahan
    Penggeledahan::create([
        'image_1'         => basename($image1),
        'image_2'         => basename($image2),
        'image_3'         => basename($image3),
        'image_4'         => basename($image4),
        'rupam'           => $request->rupam,
        'blok'            => $request->blok,
        'kamar'           => $request->kamar,
        'hari'            => $request->hari,
        'tanggal'         => $request->tanggal,
        'jam_mulai'       => $request->jam_mulai,
        'jam_akhir'       => $request->jam_akhir,
        'petugas'         => $request->petugas,
        'sajam'           => $request->sajam,
        'hp'              => $request->hp,
        'narkoba'         => $request->narkoba,
        'hasil_razia'     => $request->hasil_razia
    ]);

    // Redirect to index
    return redirect()->route('penggeledahans.index')->with(['success' => 'Data Berhasil Disimpan!']);
}

    
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get Penggeledahan by ID
        $Penggeledahan = Penggeledahan::findOrFail($id);

        //render view with Penggeledahan
        return view('Penggeledahans.show', compact('Penggeledahan'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get Penggeledahan by ID
        $Penggeledahan = Penggeledahan::findOrFail($id);

        //render view with Penggeledahan
        return view('Penggeledahans.edit', compact('Penggeledahan'));
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

        //get Penggeledahan by ID
        $Penggeledahan = Penggeledahan::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/Penggeledahans', $image->hashName());

            //delete old image
            Storage::delete('public/Penggeledahans/'.$Penggeledahan->image);

            //update Penggeledahan with new image
            $Penggeledahan->update([
                'image'         => $image->hashName(),
                'title'         => $request->title,
                'description'   => $request->description,
                'price'         => $request->price,
                'stock'         => $request->stock
            ]);

        } else {

            //update Penggeledahan without image
            $Penggeledahan->update([
                'title'         => $request->title,
                'description'   => $request->description,
                'price'         => $request->price,
                'stock'         => $request->stock
            ]);
        }

        //redirect to index
        return redirect()->route('Penggeledahans.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        //get Penggeledahan by ID
        $Penggeledahan = Penggeledahan::findOrFail($id);

        //delete images
        Storage::delete('public/Penggeledahans/'. $Penggeledahan->image_1);
        Storage::delete('public/Penggeledahans/'. $Penggeledahan->image_2);
        Storage::delete('public/Penggeledahans/'. $Penggeledahan->image_3);
        Storage::delete('public/Penggeledahans/'. $Penggeledahan->image_4);

        //delete Penggeledahan
        $Penggeledahan->delete();

        //redirect to index
        return redirect()->route('penggeledahans.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}

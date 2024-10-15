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
        //validate form
        $request->validate([
            'rupam'                      => 'required',
            'blok'                       => 'required',
            'kamar'                      => 'required',
            'hari'                       => 'required',
            'tanggal'                    => 'required',
            'jam_mulai'                  => 'required',
            'jam_akhir'                  => 'required',
            'petugas'                    => 'required',
            'sajam'                      => 'required',
            'hp'                         => 'required',
            'narkoba'                    => 'required',
            'hasil_razia'                => 'required',
            'image_1_compressed'         => 'required|string',
            'image_2_compressed'         => 'required|string',
            'image_3_compressed'         => 'required|string',
            'image_4_compressed'         => 'required|string',
        ]);

        // Function to store the base64 image
        function storeBase64Image($base64Image, $path) {
            $image_parts = explode(";base64,", $base64Image);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $fileName = uniqid() . '.'.$image_type;
            Storage::put($path . '/' . $fileName, $image_base64);
            return $fileName;
        }

        // Save compressed images
        $image1 = storeBase64Image($request->input('image_1_compressed'), 'public/Penggeledahans');
        $image2 = storeBase64Image($request->input('image_2_compressed'), 'public/Penggeledahans');
        $image3 = storeBase64Image($request->input('image_3_compressed'), 'public/Penggeledahans');
        $image4 = storeBase64Image($request->input('image_4_compressed'), 'public/Penggeledahans');

        // Create Penggeledahan
        Penggeledahan::create([
            'image_1'         => $image1,
            'image_2'         => $image2,
            'image_3'         => $image3,
            'image_4'         => $image4,
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

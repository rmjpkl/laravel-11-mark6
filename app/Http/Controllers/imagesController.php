<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use App\Models\Image;
use App\Models\Hp;
use Illuminate\Support\Facades\Auth;

class ImagesController extends Controller
{
    /**
     * index
     */
    public function index(): View
    {
        $user = Auth::user();

        if ($user->is_admin) {
            // load relasi hp agar bisa akses nama
            $images = Image::with('hp')->orderBy('created_at', 'desc')->get();
        } else {
            $images = Image::with('hp')
                ->where('hp_no', $user->hp_no)
                ->orderBy('created_at', 'desc')
                ->get();
        }

        return view('images.index', compact('images'));
    }

    /**
     * create
     */
    public function create(): View
    {
        // Ambil daftar HP untuk autocomplete
        $hps = Hp::select('no', 'nama')->orderBy('nama')->get();

        return view('images.create', compact('hps'));
    }

    /**
     * store
     */
   public function store(Request $request): RedirectResponse
{
    $request->validate([
        'hp_no'   => 'required|exists:hps,no',
        'path'    => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'caption' => 'nullable|string'
    ]);

    // Ambil ekstensi file
    $extension = $request->file('path')->getClientOriginalExtension();

    // Buat nama file berdasarkan hp_no
    $filename = $request->hp_no . '.' . $extension;

    // Simpan file ke folder images dengan nama yang ditentukan
    $path = $request->file('path')->storeAs('images', $filename, 'public');

    // Simpan ke database
    Image::create([
        'hp_no'   => $request->hp_no,
        'path'    => basename($path), // hasilnya tetap "78.jpg"
        'caption' => $request->caption
    ]);

    return redirect()->route('images.index')->with(['success' => 'Foto berhasil disimpan!']);
}

    /**
     * show
     */
public function show(string $id): View
{
    Carbon::setLocale('id');

    // Ambil image beserta relasi hp
    $image = Image::with('hp')->findOrFail($id);

    // Format tanggal upload
    $image->tanggal_upload = Carbon::parse($image->created_at)
                                   ->translatedFormat('l, d F Y H:i');

    // Ambil data hp terkait
    $hp = $image->hp;

    return view('images.show', compact('image', 'hp'));
}

    /**
     * edit
     */
    public function edit(string $id): View
    {
        $image = Image::with('hp')->findOrFail($id);
        $hps   = Hp::select('no','nama')->orderBy('nama')->get();

        return view('images.edit', compact('image','hps'));
    }

    /**
     * update
     */
   public function update(Request $request, string $id): RedirectResponse
{
    $request->validate([
        'hp_no'   => 'required|exists:hps,no',
        'path'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        'caption' => 'nullable|string'
    ]);

    $image = Image::findOrFail($id);

    // Jika ada file baru diupload
    if ($request->hasFile('path')) {
        // Hapus file lama
        Storage::disk('public')->delete('images/' . $image->path);

        // Ambil ekstensi file baru
        $extension = $request->file('path')->getClientOriginalExtension();

        // Buat nama file baru berdasarkan hp_no
        $filename = $request->hp_no . '.' . $extension;

        // Simpan file baru ke folder images
        $path = $request->file('path')->storeAs('images', $filename, 'public');

        // Update path di database
        $image->path = basename($path);
    }

    // Update data lain
    $image->hp_no   = $request->hp_no;
    $image->caption = $request->caption;
    $image->save();

    return redirect()->route('images.index')->with(['success' => 'Foto berhasil diperbarui!']);
}


    /**
     * destroy
     */
    public function destroy(string $id): RedirectResponse
    {
        $image = Image::findOrFail($id);

        Storage::disk('public')->delete('images/' . $image->path);
        $image->delete();

        return redirect()->route('images.index')->with(['success' => 'Foto berhasil dihapus!']);
    }
}

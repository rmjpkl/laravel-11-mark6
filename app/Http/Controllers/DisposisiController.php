<?php

namespace App\Http\Controllers;

//import model Penggeledahan
use Carbon\Carbon;

//import return type View
use Dompdf\Dompdf;

//import return type redirectResponse
use Illuminate\View\View;

//import Http Request
use Illuminate\Http\Request;

//import Facades Storage
use PDF; // Import class PDF

use App\Models\Disposisi;

//import Http Request
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;



class DisposisiController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): View
    {
        // Mengurutkan data berdasarkan kolom 'created_at' secara descending (dari yang terbaru ke terlama)
        $Disposisis = Disposisi::orderBy('created_at', 'desc')->get();

        // Render view dengan data Disposisis
        return view('disposisis.index', compact('Disposisis'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('disposisis.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'tanggal_diterima' => 'required|date',
            'jam_diterima' => 'required',
            'nomor_surat' => 'required|string|max:255',
            'tanggal_surat' => 'required|date',
            'asal_surat' => 'required|string|max:255',
            'ringkasan' => 'required|string',
            'file_surat' => 'required|file|mimes:pdf|max:10048', // Sesuaikan dengan kebutuhan
        ]);

        // Handle file upload
        if ($request->hasFile('file_surat')) {
            $file = $request->file('file_surat');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('file_surat', $fileName, 'public'); // Simpan file di folder 'public/file_surat'
        }

        // Simpan data ke database
        $disposisi = new Disposisi();
        $disposisi->tanggal_diterima = $request->tanggal_diterima;
        $disposisi->jam_diterima = $request->jam_diterima;
        $disposisi->nomor_surat = $request->nomor_surat;
        $disposisi->tanggal_surat = $request->tanggal_surat;
        $disposisi->asal_surat = $request->asal_surat;
        $disposisi->ringkasan = $request->ringkasan;
        $disposisi->file_surat = $filePath; // Simpan path file ke database
        $disposisi->save();

        // Redirect dengan pesan sukses
        return redirect()->route('disposisis.index')->with('success', 'Disposisi berhasil disimpan!');
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
        $disposisi = Disposisi::findOrFail($id);

        //render view with Penggeledahan
        return view('disposisis.show', compact('disposisi'));
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
        $Disposisis = Disposisi::findOrFail($id);

        //render view with Penggeledahan
        return view('disposisis.edit', compact('Disposisis'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'tanggal_diterima' => 'required|date',
            'jam_diterima' => 'required',
            'nomor_surat' => 'required|string|max:255',
            'tanggal_surat' => 'required|date',
            'asal_surat' => 'required|string|max:255',
            'ringkasan' => 'required|string',
            'file_surat' => 'nullable|file|mimes:pdf|max:10048', // File bersifat opsional saat update
            'nomor_agenda' => 'nullable|string|max:255',
            'tingkat_keamanan' => 'required|string|in:Sangat Rahasia,Rahasia,Biasa',
            'disposisi' => 'nullable|string',
            'kakplp' => 'nullable|boolean',
            'kasibinadik' => 'nullable|boolean',
            'kasikamtib' => 'nullable|boolean',
            'kasubagtu' => 'nullable|boolean',
            'sudah_disposisi' => 'nullable|boolean',
        ]);

        // Temukan data disposisi yang akan diupdate
        $disposisi = Disposisi::findOrFail($id);

        // Handle file upload jika ada file baru
        if ($request->hasFile('file_surat')) {
            // Hapus file lama jika ada
            if ($disposisi->file_surat && Storage::disk('public')->exists($disposisi->file_surat)) {
                Storage::disk('public')->delete($disposisi->file_surat);
            }

            // Simpan file baru
            $file = $request->file('file_surat');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('file_surat', $fileName, 'public');
            $disposisi->file_surat = $filePath;
        }

        // Update data disposisi
        $disposisi->tanggal_diterima = $request->tanggal_diterima;
        $disposisi->jam_diterima = $request->jam_diterima;
        $disposisi->nomor_surat = $request->nomor_surat;
        $disposisi->tanggal_surat = $request->tanggal_surat;
        $disposisi->asal_surat = $request->asal_surat;
        $disposisi->ringkasan = $request->ringkasan;
        $disposisi->nomor_agenda = $request->nomor_agenda;
        $disposisi->tingkat_keamanan = $request->tingkat_keamanan;
        $disposisi->disposisi = $request->disposisi;
        $disposisi->kakplp = $request->has('kakplp') ? 1 : 0;
        $disposisi->kasibinadik = $request->has('kasibinadik') ? 1 : 0;
        $disposisi->kasikamtib = $request->has('kasikamtib') ? 1 : 0;
        $disposisi->kasubagtu = $request->has('kasubagtu') ? 1 : 0;
        $disposisi->sudah_disposisi = $request->has('sudah_disposisi') ? 1 : 0;
        $disposisi->save();

        // Redirect dengan pesan sukses
        return redirect()->route('disposisis.index')->with('success', 'Disposisi berhasil diperbarui!');
    }


    /**
     * destroy
     *
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        // Cari data disposisi berdasarkan ID
        $disposisi = Disposisi::find($id);

        // Jika data tidak ditemukan, kembalikan response error
        if (!$disposisi) {
            return redirect()->route('disposisis.index')->with('error', 'Disposisi tidak ditemukan!');
        }

        // Hapus file yang terkait jika ada
        if ($disposisi->file_surat) {
            $filePath = storage_path('app/public/' . $disposisi->file_surat);
            if (file_exists($filePath)) {
                unlink($filePath); // Hapus file dari penyimpanan
            }
        }

        // Hapus data disposisi dari database
        $disposisi->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('disposisis.index')->with('success', 'Disposisi berhasil dihapus!');
    }
}

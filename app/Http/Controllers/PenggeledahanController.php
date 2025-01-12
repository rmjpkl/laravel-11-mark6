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

use App\Models\Penggeledahan;

//import Http Request
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;



class PenggeledahanController extends Controller
{
    /**
     * index
     *
     * @return void
     */
    public function index(): View
    {

        $user = Auth::user();

        if ($user->is_admin) {
            // Jika admin, ambil semua data
            $Penggeledahans = Penggeledahan::orderBy('created_at', 'desc')->get();
        } else {
            // Jika bukan admin, ambil data yang memiliki nilai rupam
            $Penggeledahans = Penggeledahan::where('rupam', $user->rupam)->orderBy('created_at', 'desc')->get();
        }

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
        $image1 = $request->file('image_1')->store('penggeledahans', 'public');
        // dd($image1);
        $image2 = $request->file('image_2')->store('penggeledahans', 'public');
        $image3 = $request->file('image_3')->store('penggeledahans', 'public');
        $image4 = $request->file('image_4')->store('penggeledahans', 'public');
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
        // Set locale ke bahasa Indonesia
        Carbon::setLocale('id');

        // Get Penggeledahan by ID
        $penggeledahan = Penggeledahan::findOrFail($id);

        // Format tanggal menggunakan Carbon
        $penggeledahan->tangal_format_indonesia = Carbon::parse($penggeledahan->tanggal)->translatedFormat('l, d F Y');

        // Render view with Penggeledahan
        return view('Penggeledahans.penggeledahan_pdf', compact('penggeledahan'));
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
        $penggeledahan = Penggeledahan::findOrFail($id);

        //render view with Penggeledahan
        return view('Penggeledahans.edit', compact('penggeledahan'));
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
        // Validate form
        $request->validate([
            'rupam'           => 'required',
            'blok'            => 'required',
            'kamar'           => 'required',
            'tanggal'         => 'required',
            'jam_mulai'       => 'required',
            'jam_akhir'       => 'required',
            'petugas'         => 'required',
            'sajam'           => 'required',
            'hp'              => 'required',
            'narkoba'         => 'required',
            'hasil_razia'     => 'required',
            'image_1'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_2'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_3'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'image_4'         => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Get Penggeledahan by ID
        $Penggeledahan = Penggeledahan::findOrFail($id);

        // Handle image updates
        if ($request->hasFile('image_1')) {
            // Delete old image
            Storage::disk('public')->delete('penggeledahans/' . $Penggeledahan->image_1);
            // Upload new image
            $image1 = $request->file('image_1')->store('penggeledahans', 'public');
            $Penggeledahan->image_1 = basename($image1);
        }

        if ($request->hasFile('image_2')) {
            Storage::disk('public')->delete('penggeledahans/' . $Penggeledahan->image_2);
            $image2 = $request->file('image_2')->store('penggeledahans', 'public');
            $Penggeledahan->image_2 = basename($image2);
        }

        if ($request->hasFile('image_3')) {
            Storage::disk('public')->delete('penggeledahans/' . $Penggeledahan->image_3);
            $image3 = $request->file('image_3')->store('penggeledahans', 'public');
            $Penggeledahan->image_3 = basename($image3);
        }

        if ($request->hasFile('image_4')) {
            Storage::disk('public')->delete('penggeledahans/' . $Penggeledahan->image_4);
            $image4 = $request->file('image_4')->store('penggeledahans', 'public');
            $Penggeledahan->image_4 = basename($image4);
        }

        // Update Penggeledahan
        $Penggeledahan->update([
            'rupam'           => $request->rupam,
            'blok'            => $request->blok,
            'kamar'           => $request->kamar,
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
        return redirect()->route('penggeledahans.index')->with(['success' => 'Data Berhasil Diperbarui!']);
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
        Storage::disk('public')->delete('penggeledahans/' . $Penggeledahan->image_1);
        Storage::disk('public')->delete('penggeledahans/' . $Penggeledahan->image_2);
        Storage::disk('public')->delete('penggeledahans/' . $Penggeledahan->image_3);
        Storage::disk('public')->delete('penggeledahans/' . $Penggeledahan->image_4);

        //delete Penggeledahan
        $Penggeledahan->delete();

        //redirect to index
        return redirect()->route('penggeledahans.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }








    public function previewPdf($id)
    {
        $mpdf = new \Mpdf\Mpdf();
        // Set locale ke bahasa Indonesia
        Carbon::setLocale('id');

        // Get Penggeledahan by ID
        $penggeledahan = Penggeledahan::findOrFail($id);

        // Format tanggal menggunakan Carbon
        $penggeledahan->tangal_format_indonesia = Carbon::parse($penggeledahan->tanggal)->translatedFormat('l, d F Y');


        $mpdf->WriteHTML(view('Penggeledahans.penggeledahan_pdf', compact('penggeledahan')));
        $filename = 'laporan_penggeledahan_lapas_batang' . $penggeledahan->rupam . '_' .
            str_replace(' ', '_', $penggeledahan->hari) . '_' .
            str_replace(' ', '_', $penggeledahan->tanggal) . '.pdf';
        $mpdf->Output($filename, \Mpdf\Output\Destination::INLINE);
    }





    public function exportPdf(string $id)
    {
        $mpdf = new \Mpdf\Mpdf();
        $penggeledahan = Penggeledahan::findOrFail($id);
        $mpdf->WriteHTML(view('Penggeledahans.penggeledahan_pdf', compact('penggeledahan')));
        $filename = 'laporan_penggeledahan_lapas_batang' . $penggeledahan->rupam . '_' .
            str_replace(' ', '_', $penggeledahan->hari) . '_' .
            str_replace(' ', '_', $penggeledahan->tanggal) . '.pdf';
        $mpdf->Output($filename, 'D');
    }
}

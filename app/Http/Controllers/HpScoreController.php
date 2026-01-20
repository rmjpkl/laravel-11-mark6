<?php

namespace App\Http\Controllers;

use App\Models\HpScore;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HpScoreController extends Controller
{
    /**
     * Tampilkan semua data skor HP
     */
    public function index(): View
    {
        $hpScores = HpScore::all();
        return view('hp_scores.index', compact('hpScores'));
    }

    /**
     * Update data skor HP dari Google Spreadsheet
     */
    public function updateDariSpreadsheet(Request $request)
    {
     // 1. Konfigurasi API
        $spreadsheetId = '1uRJ0i4u6rnI4XotrtvpV_2qq5VFLvhhK8afTmqtiQNM';
        $apiKey = 'AIzaSyBGM1NsyjsHs7IMm-2nA21SFMdxWB2QsZk';
        $range = 'SKOR!A2:K'; // Mengambil data dari tab SKOR baris 2 sampai kolom 

        $url = "https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/{$range}?key={$apiKey}";

        // 2. Ambil Data dari Google
        $response = Http::get($url);

        if ($response->failed()) {
            return redirect()->route('hp_scores.index')->with(['error' => 'Gagal terhubung ke Google Sheets. Pastikan akses sudah publik!']);
        }

        $rows = $response->json()['values'] ?? [];

        if (empty($rows)) {
            return redirect()->route('hp_scores.index')->with(['error' => 'Tidak ada data ditemukan di spreadsheet.']);
        }

        // 3. Helper untuk membersihkan angka
        $cleanInt = function ($value) {
            if (empty($value) || $value === '-') {
                return 0;
            }
            $numericValue = preg_replace('/[^0-9]/', '', $value);
            return is_numeric($numericValue) ? (int)$numericValue : 0;
        };

        // 4. Kosongkan tabel lama & simpan data baru
        try {
            HpScore::truncate();

            foreach ($rows as $row) {
                // Indeks array sesuai urutan kolom di Sheet (A=0, B=1, dst)
                HpScore::create([
                    'nama'              => $row[1] ?? null,  // Kolom B
                    'chipset_score'     => $cleanInt($row[2] ?? 0),  // Kolom C
                    'memory_score'      => $cleanInt($row[3] ?? 0),  // Kolom D
                    'camera_score'      => $cleanInt($row[4] ?? 0),  // Kolom E
                    'layar_score'       => $cleanInt($row[5] ?? 0),  // Kolom F
                    'batrai_score'      => $cleanInt($row[6] ?? 0),  // Kolom G
                    'fitur_score'       => $cleanInt($row[7] ?? 0),  // Kolom H
                    'antutu_score'      => $cleanInt($row[8] ?? 0),  // Kolom I
                    'harga_score'       => $cleanInt($row[9] ?? 0),  // Kolom J
                    'nilai_keseluruhan' => $cleanInt($row[10] ?? 0), // Kolom K
                ]);
            }

            return redirect()->route('hp_scores.index')->with(['success' => 'Data Skor HP Berhasil Disinkronisasi!']);

        } catch (\Exception $e) {
            return redirect()->route('hp_scores.index')->with(['error' => 'Terjadi kesalahan database: ' . $e->getMessage()]);
        }
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Hp;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HpController extends Controller
{
    /**
     * Tampilkan semua data HP
     */
    public function index() : View
    {
        $hps = Hp::all();
        return view('hp.index', compact('hps'));
    }

    /**
     * Update data dari Google Spreadsheet
     */
    public function updateDariSpreadsheet(Request $request)
    {
        // 1. Konfigurasi API
        $spreadsheetId = '1uRJ0i4u6rnI4XotrtvpV_2qq5VFLvhhK8afTmqtiQNM';
        $apiKey = 'AIzaSyBGM1NsyjsHs7IMm-2nA21SFMdxWB2QsZk';
        $range = 'HOME!A2:AB'; // Mengambil data dari tab HOME baris 2 sampai kolom AB
        
        $url = "https://sheets.googleapis.com/v4/spreadsheets/{$spreadsheetId}/values/{$range}?key={$apiKey}";

        // 2. Ambil Data dari Google
        $response = Http::get($url);

        if ($response->failed()) {
            return redirect()->route('hp.index')->with(['error' => 'Gagal terhubung ke Google Sheets. Pastikan akses sudah publik!']);
        }

        $rows = $response->json()['values'] ?? [];

        if (empty($rows)) {
            return redirect()->route('hp.index')->with(['error' => 'Tidak ada data ditemukan di spreadsheet.']);
        }

        // 3. Fungsi Helper untuk membersihkan data angka (mengatasi error '-')
        $cleanInt = function($value) {
            // Jika kosong atau berisi '-', ubah jadi 0
            if (empty($value) || $value === '-') {
                return 0;
            }
            // Ambil hanya angka (menghilangkan titik/koma/karakter lain)
            $numericValue = preg_replace('/[^0-9]/', '', $value);
            return is_numeric($numericValue) ? (int)$numericValue : 0;
        };

        // 4. Kosongkan Tabel Lama & Simpan Data Baru
        try {
            Hp::truncate();

            foreach ($rows as $row) {
                // Catatan: Indeks array sesuai urutan kolom di Sheet (A=0, B=1, dst)
                Hp::create([
                    'no'                 => $row[0] ?? null,  // Kolom A
                    'nama'               => $row[1] ?? null,  // Kolom B
                    'merek'              => $row[2] ?? null,  // Kolom C
                    'tahun_rilis'        => $row[3] ?? null,  // Kolom D
                    'harga'              => $row[4] ?? null,
                    'chipset'            => $row[5] ?? null,
                    'skor_antutu'        => $row[6] ?? null,
                    'kapasitas_ram'      => $row[7] ?? null,
                    'jenis_ram'          => $row[8] ?? null,
                    'kapasitas_storage'  => $row[9] ?? null,
                    'jenis_storage'      => $row[10] ?? null,
                    'camera_utama'       => $row[11] ?? null,
                    'stabilizer_kamera'  => $row[12] ?? null,
                    'teknologi_kamera'   => $row[13] ?? null,
                    'camera_tambahan_1'  => $cleanInt($row[14] ?? 0), // Kolom O
                    'camera_tambahan_2'  => $cleanInt($row[15] ?? 0), // Kolom P
                    'camera_depan'       => $cleanInt($row[16] ?? 0), // Kolom Q
                    'teknologi_layar'    => $row[17] ?? null, // Kolom R
                    'refresh_rate'       => $cleanInt($row[18] ?? 0), // Kolom S
                    'tingkat_kecerahan'  => $row[19] ?? null, // Kolom T
                    'pelindung_layar'    => $row[20] ?? null, // Kolom U
                    'kapasitas_baterai'  => $cleanInt($row[21] ?? 0),
                    'charger_kabel'      => $cleanInt($row[22] ?? 0),
                    'charger_wireless'   => $cleanInt($row[23] ?? 0),
                    'bypass_charging'    => (($row[24] ?? '') === 'Ya' || ($row[24] ?? '') === 'v') ? 1 : 0,
                    'nfc'                => (($row[25] ?? '') === 'Ya' || ($row[25] ?? '') === 'v') ? 1 : 0,
                    'ingress_protection' => $row[26] ?? null,
                    'fitur_tambahan'     => $row[27] ?? null,
                ]);
            }

            return redirect()->route('hp.index')->with(['success' => 'Data HP Berhasil Disinkronisasi!']);

        } catch (\Exception $e) {
            return redirect()->route('hp.index')->with(['error' => 'Terjadi kesalahan database: ' . $e->getMessage()]);
        }
    }
}
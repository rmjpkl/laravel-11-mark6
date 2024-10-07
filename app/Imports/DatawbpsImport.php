<?php
namespace App\Imports;

use App\Models\Datawbp;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Carbon\Carbon;

class DatawbpsImport implements ToModel, WithStartRow
{
    public function startRow(): int
    {
        return 2; // Mulai dari baris kedua
    }

    public function model(array $row)
    {
        // Konversi tanggal dari format j/n/Y ke Y-m-d
        // $tanggalMasuk = Carbon::createFromFormat('j/n/Y', $row[4])->format('Y-m-d');

        // Konversi status dari 1/0 ke true/false
        $status = $row[5] == '1' ? true : false;

        return new Datawbp([
            'nama' => $row[1],
            'lokasi' => $row[2],
            'tn' => $row[3],
            'tanggal_masuk' => $row[4],
            'status' => $status,
        ]);
    }
}

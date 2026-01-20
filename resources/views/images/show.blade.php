@extends('master')

@section('konten')
<div class="container-fluid">
    <h2 class="text-center my-5">Detail Image & HP</h2>

    <div class="card border-0 shadow-sm rounded">
        <div class="card-body">
            <h4>Data HP</h4>
            <table class="table table-bordered">
                <tr><th>No</th><td>{{ $hp->no }}</td></tr>
                <tr><th>Nama</th><td>{{ $hp->nama }}</td></tr>
                <tr><th>Merek</th><td>{{ $hp->merek }}</td></tr>
                <tr><th>Tahun Rilis</th><td>{{ $hp->tahun_rilis }}</td></tr>
                <tr><th>Harga</th><td>{{ $hp->harga }}</td></tr>
                <tr><th>Chipset</th><td>{{ $hp->chipset }}</td></tr>
                <tr><th>Skor Antutu</th><td>{{ $hp->skor_antutu }}</td></tr>
                <tr><th>Kapasitas RAM</th><td>{{ $hp->kapasitas_ram }}</td></tr>
                <tr><th>Jenis RAM</th><td>{{ $hp->jenis_ram }}</td></tr>
                <tr><th>Kapasitas Storage</th><td>{{ $hp->kapasitas_storage }}</td></tr>
                <tr><th>Jenis Storage</th><td>{{ $hp->jenis_storage }}</td></tr>
                <tr><th>Kamera Utama</th><td>{{ $hp->camera_utama }}</td></tr>
                <tr><th>Kamera Depan</th><td>{{ $hp->camera_depan }}</td></tr>
                <tr><th>Teknologi Layar</th><td>{{ $hp->teknologi_layar }}</td></tr>
                <tr><th>Refresh Rate</th><td>{{ $hp->refresh_rate }}</td></tr>
                <tr><th>Kecerahan</th><td>{{ $hp->tingkat_kecerahan }}</td></tr>
                <tr><th>Pelindung Layar</th><td>{{ $hp->pelindung_layar }}</td></tr>
                <tr><th>Kapasitas Baterai</th><td>{{ $hp->kapasitas_baterai }}</td></tr>
                <tr><th>NFC</th><td>{{ $hp->nfc ? 'Ya' : 'Tidak' }}</td></tr>
                <tr><th>Bypass Charging</th><td>{{ $hp->bypass_charging ? 'Ya' : 'Tidak' }}</td></tr>
                <tr><th>Fitur Tambahan</th><td>{{ $hp->fitur_tambahan }}</td></tr>
            </table>

            <h4 class="mt-4">Data Image</h4>
            <p><strong>Tanggal Upload:</strong> {{ $image->tanggal_upload }}</p>
            <p><strong>Caption:</strong> {{ $image->caption ?? '-' }}</p>
            <img src="{{ asset('storage/images/' . $image->path) }}"
                 class="rounded"
                 style="max-width:250px; border:1px solid #ccc; padding:5px;"
                 alt="Image">
        </div>
    </div>
</div>
@endsection

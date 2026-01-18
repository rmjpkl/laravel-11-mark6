@extends('master')
 
@section('konten')
    <div class="container mt-5">
        <div>
            <h2 class="text-center my-5">Tabel Data HP</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            {{-- mengimport cdn --}}
                            @include('cdntable')
                        </head>

                        <div style="overflow-x:auto;">
                            <table
                                id="example"
                                class="table table-striped table-bordered dt-responsive nowrap"
                                cellspacing="0"
                                width="100%"
                            >
                                <div>
                                    <a href="{{ route('hp.create') }}" class="btn btn-md btn-success mb-2 btn-block">UPLOAD DATA HP</a>
                                </div>
                                <div>
                                    <a href="{{ route('hp.updateDariSpreadsheet') }}" class="btn btn-md btn-primary mb-2 btn-block">Update Data dari Spreadsheet</a>
                                </div>

                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>NAMA</th>
                                        <th>MEREK</th>
                                        <th>TAHUN RILIS</th>
                                        <th>HARGA</th>
                                        <th>CHIPSET</th>
                                        <th>SKOR ANTUTU</th>
                                        <th>KAPASITAS RAM (GB)</th>
                                        <th>JENIS RAM</th>
                                        <th>KAPASITAS STORAGE (GB)</th>
                                        <th>JENIS STORAGE</th>
                                        <th>CAMERA UTAMA</th>
                                        <th>STABILIZER KAMERA</th>
                                        <th>TEKNOLOGI KAMERA</th>
                                        <th>CAMERA TAMBAHAN 1</th>
                                        <th>CAMERA TAMBAHAN 2</th>
                                        <th>CAMERA DEPAN</th>
                                        <th>TEKNOLOGI LAYAR</th>
                                        <th>REFRESH RATE</th>
                                        <th>TINGKAT KECERAHAN</th>
                                        <th>PELINDUNG LAYAR</th>
                                        <th>KAPASITAS BATERAI (mAh)</th>
                                        <th>CHARGER KABEL (W)</th>
                                        <th>CHARGER WIRELESS (W)</th>
                                        <th>BYPASS CHARGING</th>
                                        <th>NFC</th>
                                        <th>INGRESS PROTECTION</th>
                                        <th>FITUR TAMBAHAN</th>
                                        <th>created_at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($hps as $hp)
                                        <tr>
                                            <td>{{ $hp->no }}</td>
                                            <td>{{ $hp->nama }}</td>
                                            <td>{{ $hp->merek }}</td>
                                            <td>{{ $hp->tahun_rilis }}</td>
                                            <td>{{ $hp->harga }}</td>
                                            <td>{{ $hp->chipset }}</td>
                                            <td>{{ $hp->skor_antutu }}</td>
                                            <td>{{ $hp->kapasitas_ram }}</td>
                                            <td>{{ $hp->jenis_ram }}</td>
                                            <td>{{ $hp->kapasitas_storage }}</td>
                                            <td>{{ $hp->jenis_storage }}</td>
                                            <td>{{ $hp->camera_utama }}</td>
                                            <td>{{ $hp->stabilizer_kamera }}</td>
                                            <td>{{ $hp->teknologi_kamera }}</td>
                                            <td>{{ $hp->camera_tambahan_1 }}</td>
                                            <td>{{ $hp->camera_tambahan_2 }}</td>
                                            <td>{{ $hp->camera_depan }}</td>
                                            <td>{{ $hp->teknologi_layar }}</td>
                                            <td>{{ $hp->refresh_rate }}</td>
                                            <td>{{ $hp->tingkat_kecerahan }}</td>
                                            <td>{{ $hp->pelindung_layar }}</td>
                                            <td>{{ $hp->kapasitas_baterai }}</td>
                                            <td>{{ $hp->charger_kabel }}</td>
                                            <td>{{ $hp->charger_wireless }}</td>
                                            <td>{{ $hp->bypass_charging ? 'Ya' : 'Tidak' }}</td>
                                            <td>{{ $hp->nfc ? 'Ya' : 'Tidak' }}</td>
                                            <td>{{ $hp->ingress_protection }}</td>
                                            <td>{{ $hp->fitur_tambahan }}</td>
                                            <td>{{ $hp->created_at }}</td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data HP belum tersedia.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>

                        <script>
                            $(document).ready(function () {
                              new DataTable("#example", {
                                responsive: true,
                                rowReorder: {
                                  selector: "td:nth-child(2)",
                                },
                                order: [[1, "asc"]],
                                dom: "Blfrtip",
                                buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                              });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif
    </script>
@endsection

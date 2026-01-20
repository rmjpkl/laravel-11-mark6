@extends('master')

@section('konten')
    <div class="container mt-5">
        <div>
            <h2 class="text-center my-5">Database Skor HP</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            {{-- mengimport cdn untuk datatables --}}
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
                                    <a href="{{ route('hp_scores.create') }}" class="btn btn-md btn-success mb-2 btn-block">
                                        <i class="fa fa-upload"></i> UPLOAD DATA SKOR HP
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ route('hp_scores.updateDariSpreadsheet') }}" class="btn btn-md btn-primary mb-2 btn-block">
                                        <i class="fa fa-refresh"></i> Update Data dari Spreadsheet
                                    </a>
                                </div>

                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Chipset</th>
                                        <th>Memory</th>
                                        <th>Camera Utama</th>
                                        <th>Layar</th>
                                        <th>Baterai</th>
                                        <th>Fitur Tambahan</th>
                                        <th>Antutu</th>
                                        <th>Harga</th>
                                        <th>Nilai Keseluruhan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($hpScores as $index => $hp)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $hp->nama }}</td>
                                            <td>{{ $hp->chipset_score }}</td>
                                            <td>{{ $hp->memory_score }}</td>
                                            <td>{{ $hp->camera_score }}</td>
                                            <td>{{ $hp->layar_score }}</td>
                                            <td>{{ $hp->batrai_score }}</td>
                                            <td>{{ $hp->fitur_score }}</td>
                                            <td>{{ $hp->antutu_score }}</td>
                                            <td>{{ $hp->harga_score }}</td>
                                            <td class="fw-bold">{{ $hp->nilai_keseluruhan }}</td>
                                        </tr>
                                    @empty
                                        {{-- Bagian ini akan ditangani oleh DataTables "No data available" secara otomatis --}}
                                    @endforelse
                                </tbody>
                            </table>
                            
                            @if($hpScores->isEmpty())
                                <div class="alert alert-danger mt-2">
                                    Data Skor HP belum tersedia.
                                </div>
                            @endif
                        </div>

                        <script>
                            $(document).ready(function () {
                              new DataTable("#example", {
                                responsive: true,
                                rowReorder: {
                                  selector: "td:nth-child(2)",
                                },
                                order: [[10, "desc"]], // Diurutkan berdasarkan Nilai Keseluruhan (kolom ke-10) secara default
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
        // Message with SweetAlert sesuai gaya Kode 1
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
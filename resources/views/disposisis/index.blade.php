{{-- @dd($Disposisis) --}}
@extends('master')

@section('konten')
    <div class="container-fluid">
        <div>
            <h2 class="text-center my-5">Tabel Disposisi</h2>
        </div>
        <div class="card border-0 shadow-sm rounded">
            <div class="card-body">

                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    {{-- mengimport cdn - cdn --}}
                    @include('cdntable')
                </head>

                <div style="overflow-x:auto;">
                    <table id="example" class="table table-striped table-bordered dt-responsive" cellspacing="0"
                        width="100%">
                        <a href="{{ route('disposisis.create') }}" class="btn btn-md btn-success mb-5 btn-block"><i
                                class="fa fa-envelope"></i>
                            ADD DISPOSISI</a>
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">ASAL SURAT</th>
                                <th scope="col">DISPOSISI</th>
                                <th scope="col">TANGGAL SURAT</th>
                                <th scope="col">RINGKASAN</th>
                                <th scope="col" style="width: 20%">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($Disposisis as $Disposisi)
                                <tr>
                                    <td>{{ $Disposisi->asal_surat }}</td>
                                    <td class="text-center">
                                        <div class="d-flex justify-content-center">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input cek-disposisi"
                                                    name="sudah_disposisi" data-disposisi-id="{{ $Disposisi->id }}" disabled
                                                    {{ $Disposisi->sudah_disposisi ? 'checked' : '' }}>
                                            </div>
                                        </div>
                                    </td>
                                    <td>{{ $Disposisi->tanggal_diterima }}</td>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const tanggalCells = document.querySelectorAll(
                                                'td:nth-child(3)'); // Ambil semua elemen <td> kedua dalam setiap baris

                                            tanggalCells.forEach(cell => {
                                                const tanggal = new Date(cell.textContent); // Ambil teks tanggal dan konversi ke objek Date
                                                const options = {
                                                    weekday: 'long',
                                                    year: 'numeric',
                                                    month: 'long',
                                                    day: 'numeric'
                                                };
                                                const formattedDate = tanggal.toLocaleDateString('id-ID',
                                                    options); // Format tanggal sesuai lokal Indonesia

                                                cell.textContent = formattedDate; // Set teks tanggal yang sudah diformat
                                            });
                                        });
                                    </script>
                                    <td>{{ $Disposisi->ringkasan }}</td>

                                    <td class="text-right">
                                        <div class="d-flex justify-content-end gap-2"
                                            id="action-buttons-{{ $Disposisi->id }}">
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                action="{{ route('disposisis.destroy', $Disposisi->id) }}" method="POST">
                                                <a href="{{ route('disposisis.edit', $Disposisi->id) }}"
                                                    class="btn btn-sm btn-success">
                                                    <i class="fas fa-edit me-2"></i> Disposisi
                                                </a>
                                                @if ($Disposisi->sudah_disposisi)
                                                    <a href="{{ route('disposisis.show', $Disposisi->id) }}"
                                                        class="btn btn-sm btn-primary">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ url('/generate-pdf/' . $Disposisi->id) }}"
                                                        class="btn btn-sm btn-warning">
                                                        <i class="fas fa-file-pdf"></i>
                                                    </a>
                                                @endif

                                                @csrf
                                                @method('DELETE')

                                                @if (Auth::check() && Auth::user()->is_admin == 1)
                                                    <button type="submit" class="btn btn-sm btn-danger">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                @endif

                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Data Disposisis belum Tersedia.
                                </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <script>
                    $(document).ready(function() {
                        new DataTable("#example", {
                            responsive: true,
                            order: [], // Menonaktifkan pengurutan default pada semua kolom
                            // rowReorder: {
                            //     selector: "td:nth-child(2)",
                            // },
                            // dom: "Blfrtip", // Add 'l' to include the length change control
                            // buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                        });
                    });
                </script>

                {{-- {{ $Disposisis->links() }} --}}
            </div>
        </div>
    </div>



    <script>
        //message with sweetalert
        @if (session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif (session('error'))
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

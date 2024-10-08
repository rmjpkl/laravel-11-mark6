

@extends('master')

@section('konten')
    <div class="container mt-5">
        <div>
            <h2 class="text-center my-5">Tabel Trolling</h2>
            <hr>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Responsive Table with Search and Sort</title>



                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

                               <!-- DataTables CSS -->
                                <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">

                                <!-- jQuery -->
                                <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>

                                <!-- DataTables JS -->
                                <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

                                <!-- SheetJS -->
                                <script src="https://cdn.sheetjs.com/xlsx-0.19.3/package/dist/xlsx.full.min.js"></script>

                                <script>
                                    $(document).ready(function() {
                                        // Inisialisasi DataTables
                                        $('.table').DataTable();

                                        // Fungsi untuk ekspor ke Excel
                                        $('#export-button').click(function() {
                                            var table = document.querySelector('.table');
                                            var wb = XLSX.utils.table_to_book(table, {sheet: "Sheet1"});
                                            XLSX.writeFile(wb, 'TabelData.xlsx');
                                        });
                                    });
                                </script>




                        </head>

                            <div style="overflow-x:auto;">
                                <table class="table table-bordered" style="width: 100%;">
                                        <button id="export-button" class="btn btn-md btn-primary mb-5 " style="margin-bottom: 10px;">
                                        <i class="fas fa-file-excel"></i> Export Excel <!-- FontAwesome icon with label -->
                                    </button>

                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">NAMA</th>
                                            <th scope="col">POINT</th>
                                            <th scope="col">TANGGAL</th>
                                            <th scope="col">RUPAM</th>
                                            <th scope="col" style="width: 20%">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($points as $point)
                                            <tr>
                                                <td>{{ $point->nama }}</td>
                                                <td>{{ $point->point }}</td>
                                                <td>{{ $point->tanggal }}</td>
                                                <td>{{ $point->rupam }}</td>
                                                <td class="text-center">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('points.destroy', $point->id) }}" method="POST">
                                                        <a href="{{ route('points.show', $point->id) }}" class="btn btn-sm btn-primary">
                                                            <i class="fas fa-eye"></i> <!-- FontAwesome icon for 'show' -->
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        @if (Auth::check() && Auth::user()->is_admin == 1)
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="fas fa-trash-alt"></i> <!-- FontAwesome icon for 'delete' -->
                                                        </button>
                                                        @endif
                                                    </form>

                                                </td>
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger">
                                                Data points belum Tersedia.
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <script>
                                $(document).ready(function() {
                                    $('.table').DataTable();
                                });
                            </script>

                        {{-- {{ $trollings->links() }} --}}
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

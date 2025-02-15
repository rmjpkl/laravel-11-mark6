
@extends('master')

{{-- <div>
    <h2 class="text-center my-5">Tabel Data WBP</h2>
</div> --}}
@section('konten')
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            {{-- mengimport cdn - cdn --}}

                           @include('cdntable')
                        </head>

                            <div style="overflow-x:auto;">
                                <table
                                        id="example"
                                        class="table table-striped table-bordered dt-responsive nowrap"
                                        cellspacing="0"
                                        width="100%"
                                    >
 
                                    <thead>
                                        <tr>
                                            <th scope="col">NAMA</th>
                                            <th scope="col">LOKASI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($datawbps as $datawbp)
                                            <tr>
                                                <td>{{ $datawbp->nama }}</td>
                                                <td>{{ $datawbp->lokasi }}</td>
                                                                                            </tr>
                                        @empty
                                            <div class="alert alert-danger">
                                                Data trollings belum Tersedia.
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <script>
                                $(document).ready(function () {
                                  new DataTable("#example", {
                                    responsive: true,
                                //     rowReorder: {
                                //       selector: "td:nth-child(2)",
                                //     },
                                    // order: [[2, "desc"]],
                                //     order: [[1, "asc"]],
                                    dom: "f", // Add 'l' to include the length change control
                                //     buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                                      "columnDefs": [
                                        {
                                                "targets": 0, // Kolom pertama
                                                "createdCell": function(td, cellData, rowData, row, col) {
                                                $(td).css('white-space', 'normal'); // Mengatur teks agar wrap
                                                }
                                        }
                                        ]  
                                        });
                                });
                              </script>

                        {{-- {{ $trollings->links() }} --}}
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

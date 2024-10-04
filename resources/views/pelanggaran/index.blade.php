

@extends('master')

@section('konten')
    <div class="container mt-5">
        <div>
            <h2 class="text-center my-5">Tabel Trolling</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
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
                                    <a href="{{ route('pelanggarans.create') }}" class="btn btn-md btn-success mb-5 btn-block">ADD PELANGGARAN</a>
                                    <thead>
                                        <tr>
                                            <th scope="col">NAMA</th>
                                            <th scope="col">POINT</th>
                                            <th scope="col" style="width: 20%">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($pelanggarans as $pelanggaran)
                                            <tr>
                                                <td>{{ $pelanggaran->name }}</td>
                                                <td>{{ $pelanggaran->point }}</td>
                                                <td class="text-center">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pelanggarans.destroy', $pelanggaran->id) }}" method="POST">
                                                        <a href="{{ route('pelanggarans.edit', $pelanggaran->id) }}" class="btn btn-sm btn-warning">
                                                            <i class="fas fa-edit"></i> <!-- FontAwesome icon for 'edit' -->
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                       
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="fas fa-trash-alt"></i> <!-- FontAwesome icon for 'delete' -->
                                                        </button>
                                                    
                                                    </form>

                                                </td>
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger">
                                                Data pelanggarans belum Tersedia.
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
                                    // order: [[2, "desc"]],
                                    // order: [[2, "asc"]],
                                    dom: "Blfrtip", // Add 'l' to include the length change control
                                    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                                  });
                                });
                              </script>

                        {{-- {{ $pelanggarans->links() }} --}}
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

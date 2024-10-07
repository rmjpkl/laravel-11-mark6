
@extends('master')

@section('konten')
    <div class="container mt-5">
        <div>
            <h2 class="text-center my-5">Tabel Data WBP</h2>
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
                                    <a href="{{ route('datawbps.create') }}" class="btn btn-md btn-success mb-5 btn-block">UPLOAD DATA WBP</a>
                                    <thead>
                                        <tr>
                                            <th scope="col">NAMA</th>
                                            <th scope="col">LOKASI</th>
                                            <th scope="col">T/N</th>
                                            <th scope="col">TANGGAL MASUK</th>
                                            <th scope="col">STATUS</th>
                                            {{-- <th scope="col" style="width: 20%">ACTIONS</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($datawbps as $datawbp)
                                            <tr>
                                                <td>{{ $datawbp->nama }}</td>
                                                <td>{{ $datawbp->lokasi }}</td>
                                                <td>{{ $datawbp->tn }}</td>
                                                <td>{{ $datawbp->tanggal_masuk }}</td>
                                                <td>{{ $datawbp->status }}</td>
                                                {{-- <td class="text-center">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('datawbps.destroy', $datawbp->id) }}" method="POST">
                                                        <a href="{{ route('datawbps.show', $datawbp->id) }}" class="btn btn-sm btn-primary">
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

                                                </td> --}}
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
                                    rowReorder: {
                                      selector: "td:nth-child(2)",
                                    },
                                    // order: [[2, "desc"]],
                                    order: [[1, "asc"]],
                                    dom: "Blfrtip", // Add 'l' to include the length change control
                                    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                                  });
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

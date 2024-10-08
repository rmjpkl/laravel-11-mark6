

@extends('master')

@section('konten')
    <div class="container-fluid">
        <div>
            <h2 class="text-center my-5">Tabel Trolling</h2>
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
                                <table
                                        id="example"
                                        class="table table-striped table-bordered dt-responsive nowrap"
                                        cellspacing="0"
                                        width="100%"
                                    >
                                    <a href="{{ route('trollings.create') }}" class="btn btn-md btn-success mb-5 btn-block"><i class="fa fa-map-marker-alt"></i>
                                        ADD LAPORAN</a>
                                    <thead>
                                        <tr>
                                            <th scope="col">NAMA LOKASI</th>
                                            <th scope="col">TANGGAL</th>
                                            <th scope="col">JAM</th>
                                            <th scope="col">RUPAM</th>
                                            <th scope="col">PETUGAS</th>
                                            {{-- <th scope="col">KOORDINAT</th> --}}
                                            <th scope="col" style="width: 20%">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($trollings as $trolling)
                                            <tr>
                                                <td>{{ $trolling->nama_lokasi }}</td>
                                                <td>{{ $trolling->tanggal }}</td>
                                                <td>{{ $trolling->jam }}</td>
                                                <td>{{ $trolling->rupam }}</td>
                                                <td>{{ $trolling->petugas }}</td>
                                                {{-- <td>{{ $trolling->koordinat }}</td> --}}
                                                <td class="text-center">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('trollings.destroy', $trolling->id) }}" method="POST">
                                                        <a href="{{ route('trollings.show', $trolling->id) }}" class="btn btn-sm btn-primary">
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
                                    // order: [[2, "asc"]],
                                    dom: "Blfrtip", // Add 'l' to include the length change control
                                    buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                                  });
                                });
                              </script>

                        {{-- {{ $trollings->links() }} --}}
                    </div>
                </div>
            </div>

    

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

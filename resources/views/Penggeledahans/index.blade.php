{{-- @dd($Penggeledahans) --}}
@extends('master')

@section('konten')
    <div class="container-fluid">
        <div>
            <h2 class="text-center my-5">Tabel penggeledahan</h2>
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
                                        class="table table-striped table-bordered dt-responsive"
                                        cellspacing="0"
                                        width="100%"
                                    >
                                    <a href="{{ route('penggeledahans.create') }}" class="btn btn-md btn-success mb-5 btn-block"><i class="fa fa-search"></i>
                                        ADD LAPORAN PENGGELEDAHAN</a>
                                        <thead class="table-dark">
                                        <tr>
                                            <th scope="col">Blok</th>
                                            <th scope="col">Kamar</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Jam</th>
                                            <th scope="col">Rupam</th>
                                            <th scope="col">Sajam</th></th>
                                            <th scope="col">Hp</th>
                                            <th scope="col">Narkoba</th>
                                            <th scope="col">Hasil_razia</th>
                                            <th scope="col" style="width: 20%">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($Penggeledahans as $penggeledahan)
                                            <tr>
                                                <td>{{ $penggeledahan->blok }}</td>
                                                <td>{{ $penggeledahan->kamar }}</td>
                                                <td>{{ $penggeledahan->tanggal }}</td>
                                                <td>{{ $penggeledahan->jam_mulai }} s/d {{ $penggeledahan->jam_akhir }} </td>
                                                <td>{{ $penggeledahan->rupam }}</td>
                                                <td>{{ $penggeledahan->sajam }}</td>
                                                <td>{{ $penggeledahan->hp }}</td>
                                                <td>{{ $penggeledahan->narkoba }}</td>
                                                <td class="text-center">
                                                    <img src="{{ asset('/storage/penggeledahans/'.$penggeledahan->image_1) }}" class="rounded" style="width: 150px">
                                                </td>
                                                {{-- <td>{{ $penggeledahan->hasil_razia }}</td> --}}
                                                <td class="text-center">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('penggeledahans.destroy', $penggeledahan->id) }}" method="POST">
                                                        <a href="{{ route('penggeledahans.show', $penggeledahan->id) }}" class="btn btn-sm btn-primary">
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
                                                Data penggeledahans belum Tersedia.
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

                        {{-- {{ $penggeledahans->links() }} --}}
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

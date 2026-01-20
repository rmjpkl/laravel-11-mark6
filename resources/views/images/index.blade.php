@extends('master')

@section('konten')
<div class="container-fluid">
    <div>
        <h2 class="text-center my-5">Tabel Images</h2>
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
                <a href="{{ route('images.create') }}" class="btn btn-md btn-success mb-3">
                    <i class="fa fa-image"></i> ADD IMAGE
                </a>

                <table id="example" class="table table-striped table-bordered dt-responsive" cellspacing="0" width="100%">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">HP No</th>
                            <th scope="col">Nama HP</th>
                            <th scope="col">Image</th>
                            <th scope="col">Caption</th>
                            <th scope="col">Tanggal Upload</th>
                            <th scope="col" style="width: 20%">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($images as $image)
                            <tr>
                                <td>{{ $image->hp_no }}</td>
                                <td>{{ $image->hp->nama ?? '-' }}</td>
                                <td class="text-center">
                                    <img src="{{ asset('/storage/images/'.$image->path) }}" 
                                         class="rounded" style="width: 150px">
                                </td>
                                <td>{{ $image->caption ?? '-' }}</td>
                                <td>{{ \Carbon\Carbon::parse($image->created_at)->translatedFormat('l, d F Y H:i') }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                          action="{{ route('images.destroy', $image->id) }}"
                                          method="POST">
                                        <a href="{{ route('images.show', $image->id) }}"
                                           class="btn btn-sm btn-primary">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        @if (Auth::check() && Auth::user()->is_admin == 1)
                                            <a href="{{ route('images.edit', $image->id) }}"
                                               class="btn btn-sm btn-success">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        @endif
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">
                                    <div class="alert alert-danger mb-0">
                                        Data images belum tersedia.
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <script>
                $(document).ready(function() {
                    new DataTable("#example", {
                        responsive: true,
                        rowReorder: {
                            selector: "td:nth-child(2)",
                        },
                        dom: "Blfrtip",
                        buttons: ["copy", "csv", "excel", "pdf", "print", "colvis"],
                    });
                });
            </script>
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

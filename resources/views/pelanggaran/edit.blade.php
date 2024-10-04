@extends('master')

@section('konten')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Update Pelanggaran</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Update Jenis Pelanggaran</li>
        </ol>
                        <form action="{{ route('pelanggarans.update', $pelanggaran->id) }}" method="POST" enctype="multipart/form-data">

                            @csrf
                            @method('PUT')
            
            
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nama Pelanggaran</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="name" value="{{ old('name', $pelanggaran->name) }}" placeholder="Masukkan Jenis Pelanggaran">
            
                                <!-- error message untuk name -->
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
            
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">POINT</label>
                                <input type="number" class="form-control @error('point') is-invalid @enderror" name="point" value="{{ old('point', $pelanggaran->point)}}" placeholder="Masukkan Jumlah Point Pelanggaran">
            
                                <!-- error message untuk point -->
                                @error('point')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
            
            
                            <button type="submit" class="btn btn-md btn-primary me-3">UPDATE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>
            
                        </form>
                    </div>

                </main>
              @endsection

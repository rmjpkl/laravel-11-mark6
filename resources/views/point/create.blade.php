@extends('master')

@section('konten')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Point</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Tambah Point</li>
        </ol>

            <form action="{{ route('   Points.store') }}" method="POST" enctype="multipart/form-data">

                @csrf


                <div class="form-group mb-3">
                    <label class="font-weight-bold">Nama Point</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Jenis Point">

                    <!-- error message untuk name -->
                    @error('name')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label class="font-weight-bold">POINT</label>
                    <input type="number" class="form-control @error('point') is-invalid @enderror" name="point" value="{{ old('point') }}" placeholder="Masukkan Jumlah Point  Point">

                    <!-- error message untuk point -->
                    @error('point')
                        <div class="alert alert-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror
                </div>


                <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                <button type="reset" class="btn btn-md btn-warning">RESET</button>

            </form>



      </div>

  </main>
@endsection

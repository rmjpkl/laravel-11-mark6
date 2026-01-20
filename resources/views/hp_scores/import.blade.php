@extends('master')

@section('konten')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Import Data Skor HP</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('hp_scores.index') }}">Skor HP</a></li>
            <li class="breadcrumb-item active">Import</li>
        </ol>

        {{-- Pesan error validasi --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan!</strong><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card mb-4">
            <div class="card-header">
                <i class="fa fa-upload"></i> Upload File CSV
            </div>
            <div class="card-body">
                <form action="{{ route('hp_scores.import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="file" class="form-label">Pilih File CSV</label>
                        <input type="file" name="file" id="file" class="form-control" required>
                        <small class="text-muted">Format yang diterima: .csv, .txt</small>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-check"></i> Import
                    </button>
                    <a href="{{ route('hp_scores.index') }}" class="btn btn-secondary">
                        <i class="fa fa-arrow-left"></i> Kembali
                    </a>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection

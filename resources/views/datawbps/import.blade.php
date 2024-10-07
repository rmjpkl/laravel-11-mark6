{{-- @dd($datas) --}}
@extends('master')

@section('konten')
<main> 
    <div class="container-fluid px-4">
        <div class="card border-0 shadow-sm rounded mt-4">
        <div class="card-body">
        <h3 class="mt-3">Upload Update Database WBP</h3>
        <div class="form-group mb-3">
            <label class="font-weight-bold mb-3" for="nama">Nama:</label>
        <form action="{{ route('datawbps.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" class="form-control mb-3" name="file" required>
            <button type="submit" class="btn btn-md btn-primary me-3">Upload CSV</button>
        </form>
        </div>
        
    </div>
    </div>
    </div>
</main>

@endsection


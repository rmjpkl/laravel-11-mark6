{{-- @dd($datas) --}}
@extends('master')

@section('konten')
   <!-- resources/views/upload.blade.php -->
<form action="{{ route('datawbps.import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file" required>
    <button type="submit">Upload CSV</button>
</form>

@endsection


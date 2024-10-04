@extends('master')

@section('konten')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="row">
          <div class="col-6 col-sm-3">
            <div class="card bg-primary text-white mb-4 text-center">
              <div class="card-body"><i class="fa fa-list-alt fa-4x" ></i></div>
              <div class="card-footer d-flex justify-content-center"><a class="small text-white stretched-link text-decoration-none fs-7 text-center" href="{{ route('trolling') }}">Trolling</a></div>
            </div>
          </div>

          {{-- @if (Auth::check() && Auth::user()->is_admin == 1) --}}
          <div class="col-6 col-sm-3">
            <div class="card bg-info text-white mb-4 text-center">
              <div class="card-body"><i class="fa fa-id-card fa-4x" ></i></div>
              <div class="card-footer d-flex justify-content-center"><a class="small text-white stretched-link text-decoration-none fs-7 text-center" href="{{ route('users.index') }}">Managemen User</a></div>
            </div>
          </div>
          {{-- @endif --}}


          <div class="col-6 col-sm-3">
            <div class="card bg-secondary text-white mb-4 text-center">
              <div class="card-body"><i class="fa fa-table fa-4x" ></i></div>
              <div class="card-footer d-flex justify-content-center"><a class="small text-white stretched-link text-decoration-none fs-7 text-center" href="{{ route('spreadsheets.updatepenghuni') }}">Update isi Penghuni</a></div>
            </div>
          </div>

          <div class="col-6 col-sm-3">
            <div class="card bg-danger text-white mb-4 text-center">
              <div class="card-body"><i class="fa fa-male  fa-4x" ></i></div>
              <div class="card-footer d-flex justify-content-center"><a class="small text-white stretched-link text-decoration-none fs-7 text-center" href="{{ route('spreadsheets.lokasi') }}">Lokasi Kamar WBP</a></div>
            </div>
          </div>

          <div class="col-6 col-sm-3">
            <div class="card bg-warning text-white mb-4 text-center">
              <div class="card-body"><i class="fa fa-file fa-4x" ></i></div>
              <div class="card-footer d-flex justify-content-center"><a class="small text-white stretched-link text-decoration-none fs-7 text-center" href="{{ route('points.index') }}">Managemen Point</a></div>
            </div>
          </div>

          <div class="col-6 col-sm-3">
            <div class="card bg-success text-white mb-4 text-center">
              <div class="card-body"><i class="fa fa-check-square fa-4x" ></i></div>
              <div class="card-footer d-flex justify-content-center"><a class="small text-white stretched-link text-decoration-none fs-7 text-center" href="{{ route('apel') }}">Apel Penghuni</a></div>
            </div>
          </div>
        
          <div class="col-6 col-sm-3">
            <div class="card bg-warning text-white mb-4 text-center">
              <div class="card-body"><i class="fa fa-tasks fa-4x" ></i></div>
              <div class="card-footer d-flex justify-content-center"><a class="small text-white stretched-link text-decoration-none fs-7 text-center" href="{{ route('pelanggarans.index') }}">Pelanggaran</a></div>
            </div>
          </div>
        
        
        </div>
      </div>

  </main>
@endsection

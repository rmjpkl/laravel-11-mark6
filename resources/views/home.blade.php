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
                    <div class="card bg-info text-white mb-4 text-center">
                        <div class="card-body"><i class="fa fa-mobile fa-4x"></i></div>
                        <div class="card-footer d-flex justify-content-center">
                            <a class="small text-white stretched-link text-decoration-none fs-7 text-center"
                            href="{{ route('hp.index') }}">Database HP</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-6 col-sm-3">
                <div class="card bg-warning text-white mb-4 text-center">
                    <div class="card-body"><i class="fa fa-star fa-4x"></i></div>
                    <div class="card-footer d-flex justify-content-center">
                        <a class="small text-white stretched-link text-decoration-none fs-7 text-center"
                        href="{{ route('hp_scores.index') }}">Skor HP</a>
                    </div>
                </div>
                </div>   


                <div class="col-6 col-sm-3">
                    <div class="card bg-primary text-white mb-4 text-center">
                        <div class="card-body"><i class="fa fa-image fa-4x"></i></div>
                        <div class="card-footer d-flex justify-content-center">
                            <a class="small text-white stretched-link text-decoration-none fs-7 text-center"
                            href="{{ route('images.index') }}">Upload Image</a>
                        </div>
                    </div>
                </div>



                <div class="col-6 col-sm-3">
                    <div class="card bg-primary text-white mb-4 text-center">
                        <div class="card-body"><i class="fa fa-list-alt fa-4x"></i></div>
                        <div class="card-footer d-flex justify-content-center"><a
                                class="small text-white stretched-link text-decoration-none fs-7 text-center"
                                href="{{ route('trolling') }}">Trolling</a></div>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="card bg-success text-white mb-4 text-center">
                        <div class="card-body"><i class="fa fa-envelope fa-4x"></i></div>
                        <div class="card-footer d-flex justify-content-center"><a
                                class="small text-white stretched-link text-decoration-none fs-7 text-center"
                                href="{{ route('disposisis.index') }}">Disposisi Surat</a></div>
                    </div>
                </div>

                @if (Auth::check() && Auth::user()->is_admin == 1)
                    <div class="col-6 col-sm-3">
                        <div class="card bg-info text-white mb-4 text-center">
                            <div class="card-body"><i class="fa fa-id-card fa-4x"></i></div>
                            <div class="card-footer d-flex justify-content-center"><a
                                    class="small text-white stretched-link text-decoration-none fs-7 text-center"
                                    href="{{ route('users.index') }}">Managemen User</a></div>
                        </div>
                    </div>
                @endif


                <div class="col-6 col-sm-3">
                    <div class="card bg-secondary text-white mb-4 text-center">
                        <div class="card-body"><i class="fa fa-table fa-4x"></i></div>
                        <div class="card-footer d-flex justify-content-center"><a
                                class="small text-white stretched-link text-decoration-none fs-7 text-center"
                                href="{{ route('spreadsheets.updatepenghuni') }}">Update isi Penghuni</a></div>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="card bg-danger text-white mb-4 text-center">
                        <div class="card-body"><i class="fa fa-male  fa-4x"></i></div>
                        <div class="card-footer d-flex justify-content-center"><a
                                class="small text-white stretched-link text-decoration-none fs-7 text-center"
                                href="{{ route('spreadsheets.lokasi') }}">Lokasi Kamar WBP</a></div>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="card bg-warning text-white mb-4 text-center">
                        <div class="card-body"><i class="fa fa-file fa-4x"></i></div>
                        <div class="card-footer d-flex justify-content-center"><a
                                class="small text-white stretched-link text-decoration-none fs-7 text-center"
                                href="{{ route('points.index') }}">Managemen Point</a></div>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="card bg-success text-white mb-4 text-center">
                        <div class="card-body"><i class="fa fa-check-square fa-4x"></i></div>
                        <div class="card-footer d-flex justify-content-center"><a
                                class="small text-white stretched-link text-decoration-none fs-7 text-center"
                                href="{{ route('apel') }}">Apel Penghuni</a></div>
                    </div>
                </div>


                @if (Auth::check() && Auth::user()->is_admin == 1)
                    <div class="col-6 col-sm-3">
                        <div class="card bg-warning text-white mb-4 text-center">
                            <div class="card-body"><i class="fa fa-tasks fa-4x"></i></div>
                            <div class="card-footer d-flex justify-content-center"><a
                                    class="small text-white stretched-link text-decoration-none fs-7 text-center"
                                    href="{{ route('pelanggarans.index') }}">Pelanggaran</a></div>
                        </div>
                    </div>


                    <div class="col-6 col-sm-3">
                        <div class="card bg-primary text-white mb-4 text-center">
                            <div class="card-body"><i class="fa fa-database fa-4x"></i></div>
                            <div class="card-footer d-flex justify-content-center"><a
                                    class="small text-white stretched-link text-decoration-none fs-7 text-center"
                                    href="{{ route('datawbps.index') }}">Database WBP</a></div>
                        </div>
                    </div>
                @endif

                <div class="col-6 col-sm-3">
                    <div class="card bg-success text-white mb-4 text-center">
                        <div class="card-body"><i class="fa-brands fa-whatsapp fa-4x"></i></div>
                        <div class="card-footer d-flex justify-content-center"><a
                                class="small text-white stretched-link text-decoration-none fs-7 text-center"
                                href="https://rmjpkl.github.io/astekpam2.github.io/">Laporan Umum Ke Whatsapp</a></div>
                    </div>
                </div>

                <div class="col-6 col-sm-3">
                    <div class="card bg-primary text-white mb-4 text-center">
                        <div class="card-body"><i class="fa fa-search fa-4x"></i></div>
                        <div class="card-footer d-flex justify-content-center"><a
                                class="small text-white stretched-link text-decoration-none fs-7 text-center"
                                href="{{ route('penggeledahans.index') }}">Penggeledahan</a></div>
                    </div>
                </div>

              

   



            </div>
        </div>

    </main>
@endsection

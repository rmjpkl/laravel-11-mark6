@extends('master')

@section('konten')

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Gaya untuk tampilan mobile */
        @media (max-width: 768px) {
            .form-group label {
                font-size: 14px;
            }
            .form-control {
                font-size: 14px;
            }
            img {
                max-width: 100%;
                height: auto;
            }
        }
    </style>
</head>

<div class="container mt-5">
    <div>
        <h2 class="text-center my-4">Detail Laporan Penggeledahan</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Rupam</label>
                        <input type="text" class="form-control" value="{{ $penggeledahan->rupam }}" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Blok</label>
                        <input type="text" class="form-control" value="{{ $penggeledahan->blok }}" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Kamar</label>
                        <input type="text" class="form-control" value="{{ $penggeledahan->kamar }}" readonly>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Hari</label>
                                <input type="text" class="form-control" value="{{ $penggeledahan->hari }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Tanggal</label>
                                <input type="text" class="form-control" value="{{ $penggeledahan->tanggal }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Jam Mulai</label>
                                <input type="time" class="form-control" value="{{ $penggeledahan->jam_mulai }}" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Jam Akhir</label>
                                <input type="time" class="form-control" value="{{ $penggeledahan->jam_akhir }}" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Petugas</label>
                        <input type="text" class="form-control" value="{{ $penggeledahan->petugas }}" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Sajam</label>
                        <input type="text" class="form-control" value="{{ $penggeledahan->sajam }}" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label class="font-weight-bold">HP</label>
                        <input type="text" class="form-control" value="{{ $penggeledahan->hp }}" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Narkoba</label>
                        <input type="text" class="form-control" value="{{ $penggeledahan->narkoba }}" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Hasil Razia</label>
                        <textarea class="form-control" readonly>{{ $penggeledahan->hasil_razia }}</textarea>
                    </div>

                    <div class="row">
                        @for ($i = 1; $i <= 4; $i++)
                            <div class="col-md-3 mb-3">
                                <div class="form-group">
                                    <label class="font-weight-bold">Foto {{ $i }}</label>
                                    @php $image = 'image_' . $i; @endphp
                                    @if ($penggeledahan->$image)
                                        <a href="{{ asset('/storage/penggeledahans/'.$penggeledahan->$image) }}" target="_blank">
                                            <img src="{{ asset('/storage/penggeledahans/'.$penggeledahan->$image) }}" class="img-fluid rounded" alt="Foto {{ $i }}">
                                        </a>
                                    @else
                                        <p>Tidak ada foto</p>
                                    @endif
                                </div>
                            </div>
                        @endfor
                    </div>

                    <a href="{{ route('penggeledahans.index') }}" class="btn btn-md btn-secondary mt-3">Kembali</a>

                    <a href="{{ route('penggeledahans.exportPdf', $penggeledahan->id) }}" class="btn btn-md btn-info mt-3">
                        <i class="fas fa-file-pdf"></i> <!-- FontAwesome icon for PDF -->
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

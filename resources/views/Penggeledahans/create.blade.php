{{-- @dd($datas) --}}
@extends('master')

@section('konten')
<head>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

    {{-- untuk datapicker tanggal --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.id.min.js"></script>

</head>

<div class="container mt-5">
    <div>
        <h2 class="text-center my-5">Tabel Data WBP</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
           <h1 class="mt-4">Tambah Laporan Penggelehan</h1>
                <form action="{{ route('points.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Rupam</label>
                        <input type="text" class="form-control @error('rupam') is-invalid @enderror" name="rupam" value="{{ old('rupam') }} {{ Auth::user()->rupam }}" placeholder="Masukkan Judul Product">

                        <!-- error message untuk rupam -->
                        @error('rupam')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label class="font-weight-bold">blok</label>
                        <select class="form-control @error('blok') is-invalid @enderror" name="blok" id="blok">
                            <option value="">Pilih Blok</option>
                            <option value="Wisma Anggrek" {{ old('blok') == 'Wisma Anggrek' ? 'selected' : '' }}>Wisma Anggrek</option>
                            <option value="Wisma Bugenvil" {{ old('blok') == 'Wisma Bugenvil' ? 'selected' : '' }}>Wisma Bugenvil</option>
                            <option value="Wisma Cluadia" {{ old('blok') == 'Wisma Cluadia' ? 'selected' : '' }}>Wisma Cluadia</option>
                            <option value="Wisma Edelweis" {{ old('blok') == 'Wisma Edelweis' ? 'selected' : '' }}>Wisma Edelweis</option>
                            <option value="Wisma Flamboyan" {{ old('blok') == 'Wisma Flamboyan' ? 'selected' : '' }}>Wisma Flamboyan</option>
                            <option value="Wisma Dahlia" {{ old('blok') == 'Wisma Dahlia' ? 'selected' : '' }}>Wisma Dahlia</option>
                        </select>
                        @error('blok')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    

                   
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">kamar</label>
                        <input type="text" class="form-control @error('kamar') is-invalid @enderror" name="kamar" value="{{ old('kamar') }}" placeholder="ex: Kamar 1 dan 2">

                        <!-- error message untuk kamar -->
                        @error('kamar')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">hari</label>
                                <input type="text" class="form-control @error('hari') is-invalid @enderror" id="hari" name="hari" value="{{ old('hari') }}" placeholder="Masukkan Judul Product">
                                @error('hari')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                                <script>
                                    $(document).ready(function(){
                                        function formatDate(date) {
                                            var day = ("0" + date.getDate()).slice(-2);
                                            var month = date.toLocaleString('id-ID', { month: 'long' });
                                            var year = date.getFullYear();
                                            return `${day} ${month} ${year}`;
                                        }
                    
                                        $('#hari').datepicker({
                                            format: 'DD',
                                            language: 'id',
                                            autoclose: true
                                        }).on('changeDate', function() {
                                            var selectedDate = $('#hari').datepicker('getDate');
                                            var formattedDate = formatDate(selectedDate);
                                            $('#tanggal').val(formattedDate);
                                        });
                                        $('#hari').datepicker('setDate', new Date());
                                    });
                                </script>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">tanggal</label>
                                <input type="text" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" placeholder="Masukkan Judul Product" readonly>
                                @error('tanggal')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    

                   
                    <div class="row">
                        <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">jam_mulai</label>
                        <input type="time" class="form-control @error('jam_mulai') is-invalid @enderror" name="jam_mulai" value="{{ old('jam_mulai') }}" placeholder="Masukkan Judul Product">

                        <!-- error message untuk jam_mulai -->
                        @error('jam_mulai')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">

                   
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">jam_akhir</label>
                        <input type="time" class="form-control @error('jam_akhir') is-invalid @enderror" name="jam_akhir" value="{{ old('jam_akhir') }}" placeholder="Masukkan Judul Product">

                        <!-- error message untuk jam_akhir -->
                        @error('jam_akhir')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                </div>
            </div>

                   
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">petugas</label>
                        <input type="text" class="form-control @error('petugas') is-invalid @enderror" name="petugas" value="{{ old('petugas') }}" placeholder="Masukkan Judul Product">

                        <!-- error message untuk petugas -->
                        @error('petugas')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                   
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">sajam</label>
                        <input type="text" class="form-control @error('sajam') is-invalid @enderror" name="sajam" value="{{ old('sajam') }}" placeholder="Masukkan Judul Product">

                        <!-- error message untuk sajam -->
                        @error('sajam')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                   
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">hp</label>
                        <input type="text" class="form-control @error('hp') is-invalid @enderror" name="hp" value="{{ old('hp') }}" placeholder="Masukkan Judul Product">

                        <!-- error message untuk hp -->
                        @error('hp')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                   
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">narkoba</label>
                        <input type="text" class="form-control @error('narkoba') is-invalid @enderror" name="narkoba" value="{{ old('narkoba') }}" placeholder="Masukkan Judul Product">

                        <!-- error message untuk narkoba -->
                        @error('narkoba')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                   
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">hasil_razia</label>
                        <input type="text" class="form-control @error('hasil_razia') is-invalid @enderror" name="hasil_razia" value="{{ old('hasil_razia') }}" placeholder="Masukkan Judul Product">

                        <!-- error message untuk hasil_razia -->
                        @error('hasil_razia')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                  
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">image_1</label>
                        <input type="file" class="form-control @error('image_1') is-invalid @enderror" name="image_1">

                        <!-- error message untuk image_1 -->
                        @error('image_1')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">image_2</label>
                        <input type="file" class="form-control @error('image_2') is-invalid @enderror" name="image_2">

                        <!-- error message untuk image_2 -->
                        @error('image_2')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">image_3</label>
                        <input type="file" class="form-control @error('image_3') is-invalid @enderror" name="image_3">

                        <!-- error message untuk image_3 -->
                        @error('image_3')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">image_4</label>
                        <input type="file" class="form-control @error('image_4') is-invalid @enderror" name="image_4">

                        <!-- error message untuk image_4 -->
                        @error('image_4')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
 
                <button type="submit" class="btn btn-md btn-primary me-3 mt-3">SAVE</button>
                <button type="reset" class="btn btn-md btn-warning mt-3">RESET</button>
        </form>
        </div>
        </div>
    </div>
</div>
</div>

@endsection


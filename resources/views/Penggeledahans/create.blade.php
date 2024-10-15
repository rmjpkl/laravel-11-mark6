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
        <h2 class="text-center my-4">Tambah Laporan Penggelehan</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
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
                        <label class="font-weight-bold">Blok</label>
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
                        <label class="font-weight-bold">Kamar</label>
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
                                <label class="font-weight-bold">Hari</label>
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
                                <label class="font-weight-bold">Tanggal</label>
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
                                <label class="font-weight-bold">Jam Mulai</label>
                                <input type="time" id="jam_mulai" class="form-control @error('jam_mulai') is-invalid @enderror" name="jam_mulai" value="{{ old('jam_mulai') }}" placeholder="Masukkan Judul Product">
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
                                <label class="font-weight-bold">Jam Akhir</label>
                                <input type="time" id="jam_akhir" class="form-control @error('jam_akhir') is-invalid @enderror" name="jam_akhir" value="{{ old('jam_akhir') }}" placeholder="Masukkan Judul Product">
                                <!-- error message untuk jam_akhir -->
                                @error('jam_akhir')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <script>
                        window.onload = function() {
                            const now = new Date();

                            const offset = now.getTimezoneOffset();
                            now.setMinutes(now.getMinutes() - offset);

                            const jamAkhir = now.toISOString().substring(11, 16);

                            now.setMinutes(now.getMinutes() - 18);
                            const jamMulai = now.toISOString().substring(11, 16);

                            document.getElementById('jam_mulai').value = jamMulai;
                            document.getElementById('jam_akhir').value = jamAkhir;
                        }
                    </script>



                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Petugas</label>
                        <input type="text" class="form-control @error('petugas') is-invalid @enderror" name="petugas" value="Ka.Rupam , Waka.Rupam, Anggota Jaga" placeholder="Masukkan Judul Product">

                        <!-- error message untuk petugas -->
                        @error('petugas')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Sajam</label>
                        <input type="text" class="form-control @error('sajam') is-invalid @enderror" id="sajam" name="sajam" value="NIHIL" placeholder="Masukkan Judul Product">

                        <!-- error message untuk sajam -->
                        @error('sajam')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-group mb-3">
                        <label class="font-weight-bold">HP</label>
                        <input type="text" class="form-control @error('hp') is-invalid @enderror" id="hp" name="hp" value="NIHIL" placeholder="Masukkan Judul Product">

                        <!-- error message untuk hp -->
                        @error('hp')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Narkoba</label>
                        <input type="text" class="form-control @error('narkoba') is-invalid @enderror" id="narkoba" name="narkoba" value="NIHIL" placeholder="Masukkan Judul Product">

                        <!-- error message untuk narkoba -->
                        @error('narkoba')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-group mb-3">
                        <label class="font-weight-bold">Hasil Razia</label>
                        <textarea class="form-control @error('hasil_razia') is-invalid @enderror" name="hasil_razia" placeholder="Masukkan hasil razia">NIHIL</textarea>
                        <!-- error message untuk hasil_razia -->
                        @error('hasil_razia')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror

                        <script>
                            function getKeterangan() {
                            var inputNilai = document.getElementById("narkoba").value;
                            if (sajam == "NIHIL" || hp == "NIHIL" || narkoba == "NIHIL") {
                                document.getElementById("hasil_razia").innerHTML = "1 Tidak ada barang bukti hasil razia/ sidak dan pemeriksaan instalasi listrik diinventarisir dan didata. 2. Tidak ada barang bukti hasil razia/ sidak dan pemeriksaan instalasi listrik diamankan / dimusnahkan.";
                            } else {
                                document.getElementById("hasil_razia").innerHTML =  "1.Barang bukti hasil razia/ sidak dan pemeriksaan instalasi listrik diinventarisir dan didata. 2. Barang bukti hasil razia/ sidak dan pemeriksaan instalasi listrik diamankan / dimusnahkan.";
                            }
                            }
                        </script>

                    </div>



                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Foto 1</label>
                            <input type="file" class="form-control @error('image_1') is-invalid @enderror" name="image_1" id="image_1">
                            <div id="imagePreview1" class="mt-3"></div>
                            @error('image_1')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Foto 2</label>
                            <input type="file" class="form-control @error('image_2') is-invalid @enderror" name="image_2" id="image_2">
                            <div id="imagePreview2" class="mt-3"></div>
                            @error('image_2')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Foto 3</label>
                            <input type="file" class="form-control @error('image_3') is-invalid @enderror" name="image_3" id="image_3">
                            <div id="imagePreview3" class="mt-3"></div>
                            @error('image_3')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label class="font-weight-bold">Foto 4</label>
                            <input type="file" class="form-control @error('image_4') is-invalid @enderror" name="image_4" id="image_4">
                            <div id="imagePreview4" class="mt-3"></div>
                            @error('image_4')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="hidden" name="image_1_compressed" id="image_1_compressed">
                        <input type="hidden" name="image_2_compressed" id="image_2_compressed">
                        <input type="hidden" name="image_3_compressed" id="image_3_compressed">
                        <input type="hidden" name="image_4_compressed" id="image_4_compressed">

                <script>
                    function previewImage(inputId, previewId) {
                        document.getElementById(inputId).addEventListener('change', function() {
                            const file = this.files[0];
                            if (file) {
                                const reader = new FileReader();
                                reader.onload = async function(event) {
                                    const compressedDataUrl = await compressImage(event.target.result);
                                    const imgElement = document.createElement('img');
                                    imgElement.src = compressedDataUrl;
                                    imgElement.style.maxWidth = '300px';
                                    document.getElementById(previewId).innerHTML = '';
                                    document.getElementById(previewId).appendChild(imgElement);

                                    document.getElementById(inputId + '_compressed').value = compressedDataUrl;
                                }
                                reader.readAsDataURL(file);
                            }
                        });
                    }

                    function compressImage(dataUrl, quality = 0.7) {
                        const canvas = document.createElement('canvas');
                        const img = new Image();
                        img.src = dataUrl;
                        return new Promise((resolve) => {
                            img.onload = () => {
                                canvas.width = img.width * quality;
                                canvas.height = img.height * quality;
                                const ctx = canvas.getContext('2d');
                                ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
                                resolve(canvas.toDataURL('image/jpeg', quality));
                            };
                        });
                    }

                    previewImage('image_1', 'imagePreview1');
                    previewImage('image_2', 'imagePreview2');
                    previewImage('image_3', 'imagePreview3');
                    previewImage('image_4', 'imagePreview4');
                </script>


                <button type="submit" class="btn btn-md btn-primary me-3 mt-3">SAVE</button>
                <button type="reset" class="btn btn-md btn-warning mt-3">RESET</button>
        </form>
        </div>
        </div>
    </div>
</div>
</div>

@endsection


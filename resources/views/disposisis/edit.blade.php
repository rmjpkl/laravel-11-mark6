@extends('master')

@section('konten')

    <head>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

        {{-- untuk datapicker tanggal --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.id.min.js">
        </script>

        {{-- untuk melakukan kompres foto --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/compressorjs/1.0.6/compressor.min.js"></script>
        <style>
            .pdf-viewer {
                width: 100%;
                border: 1px solid #ccc;
                margin-top: 10px;
                overflow-x: auto;
                /* Tambahkan scroll horizontal jika diperlukan */
            }

            .pdf-page {
                width: 100%;
                margin-bottom: 20px;
                border-bottom: 1px solid #ddd;
                padding-bottom: 20px;
            }

            .pdf-page canvas {
                width: 100% !important;
                /* Pastikan canvas mengikuti lebar container */
                height: auto !important;
                /* Biarkan tinggi menyesuaikan */
            }
        </style>
    </head>

    <div class="container mt-5">
        <div>
            <h2 class="text-center my-4">Edit Disposisi</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('disposisis.update', $Disposisis->id) }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Tanggal Diterima</label>
                                <input type="date" class="form-control @error('tanggal_diterima') is-invalid @enderror"
                                    id="tanggal_diterima" name="tanggal_diterima"
                                    value="{{ old('tanggal_diterima', $Disposisis->tanggal_diterima) }}">
                                @error('tanggal_diterima')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Jam Diterima</label>
                                <input type="time" class="form-control @error('jam_diterima') is-invalid @enderror"
                                    id="jam_diterima" name="jam_diterima"
                                    value="{{ old('jam_diterima', $Disposisis->jam_diterima) }}">
                                @error('jam_diterima')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nomor Surat</label>
                                <input type="text" class="form-control @error('nomor_surat') is-invalid @enderror"
                                    name="nomor_surat" value="{{ old('nomor_surat', $Disposisis->nomor_surat) }}">
                                @error('nomor_surat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Tanggal Surat</label>
                                <input type="date" class="form-control @error('tanggal_surat') is-invalid @enderror"
                                    id="tanggal_surat" name="tanggal_surat"
                                    value="{{ old('tanggal_surat', $Disposisis->tanggal_surat) }}">
                                @error('tanggal_surat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Asal Surat</label>
                                <input type="text" class="form-control @error('asal_surat') is-invalid @enderror"
                                    name="asal_surat" value="{{ old('asal_surat', $Disposisis->asal_surat) }}">
                                @error('asal_surat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Ringkasan</label>
                                <textarea class="form-control @error('ringkasan') is-invalid @enderror" name="ringkasan">{{ old('ringkasan', $Disposisis->ringkasan) }}</textarea>
                                @error('ringkasan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>






                            <div class="form-group mb-3">
                                <label class="font-weight-bold">File Surat</label>

                                @if ($Disposisis->file_surat)
                                    <!-- Tampilan Desktop (default) -->
                                    <div id="desktop-pdf-viewer" class="desktop-view">
                                        <embed src="{{ asset('storage/' . $Disposisis->file_surat) }}"
                                            type="application/pdf" class="pdf-viewer" width="100%" height="600px">
                                    </div>

                                    <!-- Tampilan Mobile (default hidden) -->
                                    <div id="mobile-pdf-viewer" class="mobile-view" style="display: none;">
                                        <div class="form-control" id="pdf-container"></div>
                                    </div>
                                @endif

                                @error('file_surat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- PDF.js -->
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
                            <script>
                                // Fungsi untuk mendeteksi perangkat mobile
                                function isMobile() {
                                    return window.innerWidth <= 768; // Ukuran layar mobile (bisa disesuaikan)
                                }

                                // Fungsi untuk menampilkan PDF di mobile menggunakan PDF.js
                                const renderPdf = async (url) => {
                                    try {
                                        const pdfContainer = document.getElementById('pdf-container');
                                        const loadingTask = pdfjsLib.getDocument(url);
                                        const pdf = await loadingTask.promise;

                                        for (let pageNumber = 1; pageNumber <= pdf.numPages; pageNumber++) {
                                            const page = await pdf.getPage(pageNumber);
                                            const canvas = document.createElement('canvas');
                                            canvas.className = 'pdf-page';
                                            pdfContainer.appendChild(canvas);

                                            const viewport = page.getViewport({
                                                scale: 1
                                            });
                                            const scale = (window.innerWidth / viewport.width) * 1.5; // Sesuaikan skala
                                            const scaledViewport = page.getViewport({
                                                scale
                                            });

                                            const context = canvas.getContext('2d');
                                            canvas.height = scaledViewport.height;
                                            canvas.width = scaledViewport.width;

                                            const renderContext = {
                                                canvasContext: context,
                                                viewport: scaledViewport,
                                                enableWebGL: true,
                                            };
                                            await page.render(renderContext).promise;
                                        }
                                    } catch (error) {
                                        console.error('Error rendering PDF:', error);
                                    }
                                };

                                // Deteksi perangkat dan tampilkan viewer yang sesuai
                                if (isMobile()) {
                                    // Sembunyikan tampilan desktop
                                    document.getElementById('desktop-pdf-viewer').style.display = 'none';
                                    // Tampilkan tampilan mobile
                                    document.getElementById('mobile-pdf-viewer').style.display = 'block';
                                    // Render PDF di mobile
                                    const pdfUrl = "{{ asset('storage/' . $Disposisis->file_surat) }}";
                                    renderPdf(pdfUrl);
                                } else {
                                    // Tampilkan tampilan desktop (default)
                                    document.getElementById('desktop-pdf-viewer').style.display = 'block';
                                    document.getElementById('mobile-pdf-viewer').style.display = 'none';
                                }
                            </script>







                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nomor Agenda</label>
                                <input type="text" class="form-control @error('nomor_agenda') is-invalid @enderror"
                                    name="nomor_agenda" value="{{ old('nomor_agenda', $Disposisis->nomor_agenda) }}">
                                @error('nomor_agenda')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>




                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Tingkat Keamanan</label>
                                <div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tingkat_keamanan"
                                            id="sangat_rahasia" value="Sangat Rahasia"
                                            {{ old('tingkat_keamanan', $Disposisis->tingkat_keamanan) == 'Sangat Rahasia' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="sangat_rahasia">
                                            Sangat Rahasia
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tingkat_keamanan"
                                            id="rahasia" value="Rahasia"
                                            {{ old('tingkat_keamanan', $Disposisis->tingkat_keamanan) == 'Rahasia' ? 'checked' : '' }}>
                                        <label class="form-check-label" for="rahasia">
                                            Rahasia
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="tingkat_keamanan"
                                            id="biasa" value="Biasa"
                                            {{ old('tingkat_keamanan', $Disposisis->tingkat_keamanan) == 'Biasa' ? 'checked' : (empty(old('tingkat_keamanan')) ? 'checked' : '') }}>
                                        <label class="form-check-label" for="biasa">
                                            Biasa
                                        </label>
                                    </div>
                                </div>
                                @error('tingkat_keamanan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>




                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Isi Disposisi</label>
                                <textarea class="form-control @error('disposisi') is-invalid @enderror" name="disposisi" rows="4"
                                    style="width: 100%;">{{ old('disposisi', $Disposisis->disposisi) }}</textarea>
                                @error('disposisi')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group  mb-3"">
                                <label for="kakplp">Diteruskan Kepada</label>
                            </div>

                            <div class="form-group mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="kakplp" value="1"
                                        {{ old('kakplp', $Disposisis->kakplp) ? 'checked' : '' }}>
                                    <label class="form-check-label font-weight-bold">Ka.KPLP</label>
                                </div>
                                @error('kakplp')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="kasibinadik" value="1"
                                        {{ old('kasibinadik', $Disposisis->kasibinadik) ? 'checked' : '' }}>
                                    <label class="form-check-label font-weight-bold">Kasi Binadik</label>
                                </div>
                                @error('kasibinadik')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="kasikamtib" value="1"
                                        {{ old('kasikamtib', $Disposisis->kasikamtib) ? 'checked' : '' }}>
                                    <label class="form-check-label font-weight-bold">Kasi Kamtib</label>
                                </div>
                                @error('kasikamtib')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="kasubagtu" value="1"
                                        {{ old('kasubagtu', $Disposisis->kasubagtu) ? 'checked' : '' }}>
                                    <label class="form-check-label font-weight-bold">Kasubag TU</label>
                                </div>
                                @error('kasubagtu')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            @if (Auth::check() && Auth::user()->is_admin == 1)
                                <div class="form-group mb-3">
                                    <label class="font-weight-bold">Sudah Disposisi</label>
                                    <input type="checkbox" name="sudah_disposisi" value="1" checked>
                                    @error('sudah_disposisi')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            @endif

                            <button type="save" class="btn btn-md btn-primary me-3 mt-3">DISPOSISIKAN</button>
                            <button type="reset" class="btn btn-md btn-warning mt-3">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

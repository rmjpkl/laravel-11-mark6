@extends('master')

@section('konten')

    <head>
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

        {{-- PDF.js untuk preview PDF --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.min.js"></script>
        <style>
            .pdf-preview-container {
                margin-top: 15px;
                border: 1px solid #ddd;
                padding: 10px;
                border-radius: 5px;
                display: none;
            }

            .pdf-viewer {
                width: 100%;
                height: 500px;
            }

            .mobile-pdf-viewer {
                display: none;
            }

            .pdf-page {
                width: 100%;
                margin-bottom: 10px;
                border: 1px solid #eee;
            }

            @media (max-width: 768px) {
                .desktop-pdf-viewer {
                    display: none;
                }

                .mobile-pdf-viewer {
                    display: block;
                }
            }
        </style>
    </head>

    <div class="container mt-5">
        <div>
            <h2 class="text-center my-4">INPUTAN DISPOSISI SURAT</h2>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('disposisis.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <!-- Existing form fields... -->

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">File Surat</label>
                                <input type="file" class="form-control @error('file_surat') is-invalid @enderror"
                                    name="file_surat" id="file_surat" accept="application/pdf">
                                @error('file_surat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror

                                <!-- PDF Preview Container -->
                                <div id="pdf-preview-container" class="pdf-preview-container">
                                    <h5>Preview PDF:</h5>

                                    <!-- Desktop PDF Viewer -->
                                    <div id="desktop-pdf-viewer" class="desktop-pdf-viewer">
                                        <embed id="pdf-embed" src="" type="application/pdf" class="pdf-viewer">
                                    </div>

                                    <!-- Mobile PDF Viewer -->
                                    <div id="mobile-pdf-viewer" class="mobile-pdf-viewer">
                                        <div id="pdf-pages-container"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nomor Surat</label>
                                <input type="text" class="form-control @error('nomor_surat') is-invalid @enderror"
                                    name="nomor_surat" value="{{ old('nomor_surat') }}" placeholder="Masukkan Nomor Surat">
                                @error('nomor_surat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Tanggal Surat</label>
                                <input type="date" class="form-control @error('tanggal_surat') is-invalid @enderror"
                                    id="tanggal_surat" name="tanggal_surat" value="{{ old('tanggal_surat') }}">
                                @error('tanggal_surat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Asal Surat</label>
                                <input type="text" class="form-control @error('asal_surat') is-invalid @enderror"
                                    name="asal_surat" value="{{ old('asal_surat') }}" placeholder="Masukkan Asal Surat">
                                @error('asal_surat')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Isi Ringkasan</label>
                                <textarea class="form-control @error('ringkasan') is-invalid @enderror" name="ringkasan"
                                    placeholder="Masukkan Isi Ringkasan">{{ old('ringkasan') }}</textarea>
                                @error('ringkasan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Tanggal Diterima</label>
                                <input type="date" class="form-control @error('tanggal_diterima') is-invalid @enderror"
                                    id="tanggal_diterima" name="tanggal_diterima" value="{{ old('tanggal_diterima') }}">
                                @error('tanggal_diterima')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Jam Diterima</label>
                                <input type="time" class="form-control @error('jam_diterima') is-invalid @enderror"
                                    id="jam_diterima" name="jam_diterima" value="{{ old('jam_diterima') }}">
                                @error('jam_diterima')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const now = new Date();

                                    // Format tanggal (YYYY-MM-DD)
                                    const year = now.getFullYear();
                                    const month = String(now.getMonth() + 1).padStart(2, '0'); // Bulan dimulai dari 0
                                    const day = String(now.getDate()).padStart(2, '0');
                                    const formattedDate = `${year}-${month}-${day}`;

                                    // Format jam (HH:MM)
                                    const hours = String(now.getHours()).padStart(2, '0');
                                    const minutes = String(now.getMinutes()).padStart(2, '0');
                                    const formattedTime = `${hours}:${minutes}`;

                                    // Isi nilai input tanggal dan jam diterima
                                    document.getElementById('tanggal_diterima').value = formattedDate;
                                    document.getElementById('jam_diterima').value = formattedTime;
                                });
                            </script>

                            <button type="submit" class="btn btn-md btn-primary me-3 mt-3">SAVE</button>
                            <button type="reset" class="btn btn-md btn-warning mt-3">RESET</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Set PDF.js worker path
        pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.11.338/pdf.worker.min.js';

        // Handle file input change
        document.getElementById('file_surat').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file && file.type === 'application/pdf') {
                const previewContainer = document.getElementById('pdf-preview-container');
                previewContainer.style.display = 'block';

                // Clear previous preview
                document.getElementById('pdf-embed').src = '';
                document.getElementById('pdf-pages-container').innerHTML = '';

                // Create object URL for the PDF file
                const fileURL = URL.createObjectURL(file);

                // For desktop - use embed element
                document.getElementById('pdf-embed').src = fileURL + '#toolbar=0&navpanes=0';

                // For mobile - use PDF.js to render pages
                if (window.innerWidth <= 768) {
                    renderMobilePdf(fileURL);
                }
            } else {
                document.getElementById('pdf-preview-container').style.display = 'none';
            }
        });

        // Function to render PDF for mobile using PDF.js
        async function renderMobilePdf(url) {
            try {
                const loadingTask = pdfjsLib.getDocument(url);
                const pdf = await loadingTask.promise;
                const container = document.getElementById('pdf-pages-container');

                for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
                    const page = await pdf.getPage(pageNum);
                    const viewport = page.getViewport({
                        scale: 1.0
                    });

                    // Adjust scale for mobile
                    const scale = Math.min((window.innerWidth - 20) / viewport.width, 1.5);
                    const scaledViewport = page.getViewport({
                        scale
                    });

                    const canvas = document.createElement('canvas');
                    canvas.className = 'pdf-page';
                    const context = canvas.getContext('2d');
                    canvas.height = scaledViewport.height;
                    canvas.width = scaledViewport.width;

                    container.appendChild(canvas);

                    await page.render({
                        canvasContext: context,
                        viewport: scaledViewport
                    }).promise;
                }
            } catch (error) {
                console.error('Error rendering PDF:', error);
            }
        }

        // Handle window resize to switch between desktop and mobile viewers
        window.addEventListener('resize', function() {
            const previewContainer = document.getElementById('pdf-preview-container');
            if (previewContainer.style.display === 'block') {
                const fileInput = document.getElementById('file_surat');
                if (fileInput.files.length > 0) {
                    const fileURL = URL.createObjectURL(fileInput.files[0]);

                    if (window.innerWidth <= 768) {
                        // Switch to mobile view
                        document.getElementById('pdf-embed').src = '';
                        document.getElementById('pdf-pages-container').innerHTML = '';
                        renderMobilePdf(fileURL);
                    } else {
                        // Switch to desktop view
                        document.getElementById('pdf-pages-container').innerHTML = '';
                        document.getElementById('pdf-embed').src = fileURL + '#toolbar=0&navpanes=0';
                    }
                }
            }
        });
    </script>
@endsection

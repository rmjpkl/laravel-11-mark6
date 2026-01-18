@extends('master')

@section('konten')

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Disposisi Surat</title>
        <style>
            /* Ubah ke ukuran A4 portrait untuk ruang lebih */
            @page {
                size: A5 landscape;
                margin: 5mm 15mm;
            }

            body {
                width: 100%;
                margin: 0%;
                padding: 0%;
                font-family: 'DejaVu Sans', sans-serif;
                font-size: 12px;
                line-height: 1.2;
            }

            .container {
                width: 100%;
                padding: 5mm;
                box-sizing: border-box;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                table-layout: fixed;
            }

            th,
            td {
                border: 1px solid black;
                padding: 3px 3px;
                text-align: left;
                vertical-align: top;
                font-size: 11px;
                word-wrap: break-word;
            }

            th {
                background-color: #f2f2f2;
                font-weight: bold;
            }

            .center-text {
                text-align: center;
                vertical-align: middle;
            }

            .no-border-right {
                border-right: none;
            }

            .no-border-left {
                border-left: none;
            }

            .border-khusus {
                /* border-left: 1px solid #000;
                                    border-right: 1px solid #000; */
                border-top: none;
                border-bottom: none;
            }

            /* Atur lebar kolom secara proporsional */
            .col-header {
                width: 20%;
            }

            .col-separator {
                width: 3%;
            }

            .col-content {
                width: 27%;
            }

            .col-security {
                width: 15%;
            }

            /* Khusus bagian disposisi */
            .col-disposisi {
                width: 40%;
            }

            .col-penerima {
                width: 15%;
            }

            .col-checklist {
                width: 10%;
                font-size: 18px;
            }

            /* Tinggi khusus untuk konten panjang */
            .row-summary {
                height: 40px;
            }

            .row-disposisi {
                height: 15px;
            }

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
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">

                    <body>
                        <div class="container">
                            <table>
                                <!-- Header -->
                                <tr>
                                    <td colspan="6" class="center-text" style="padding:5px 0;">
                                        <b>KEMENTERIAN IMIGRASI DAN PEMASYARAKATAN REPUBLIK INDONESIA<br>
                                            KANTOR WILAYAH JAWA TENGAH<br>
                                            LEMBAGA PEMASYARAKATAN KELAS IIB BATANG</b><br>
                                        Jl. Raya Batang Km 4,1 Rowobelang<br>
                                        Telp. (0285) 4494300 Fax (02858) 4494299
                                    </td>
                                </tr>

                                <!-- Judul Lembar Disposisi -->
                                <tr>
                                    <th colspan="6" class="center-text" style="padding:3px 0;">LEMBAR DISPOSISI</th>
                                </tr>

                                <!-- Baris 1 -->
                                <tr>
                                    <td class="no-border-right col-header">Nomor Agenda/Registrasi</td>
                                    <td class="no-border-left no-border-right col-separator">:</td>
                                    <td class="no-border-left no-border-right col-content">
                                        {{ $disposisi->nomor_agenda ?? '-' }}</td>
                                    <td class="no-border-right col-security">Tingkat Keamanan</td>
                                    <td class="no-border-left no-border-right col-separator">:</td>
                                    <td class="no-border-left col-content">{{ $disposisi->tingkat_keamanan ?? '-' }}</td>
                                </tr>

                                <!-- Baris 2 -->
                                <tr>
                                    <td class="no-border-right">Tanggal Penerimaan</td>
                                    <td class="no-border-left no-border-right">:</td>
                                    <td class="no-border-left no-border-right" id="tanggal-surat">
                                        {{ $disposisi->tanggal_diterima }}</td>
                                    <td class="no-border-right">Tanggal Penyelesaian</td>
                                    <td class="no-border-left no-border-right">:</td>
                                    <td class="no-border-left">-</td>
                                </tr>

                                <!-- Baris 3 -->
                                <tr>
                                    <td class="border-khusus no-border-right">Tanggal & Nomor Surat</td>
                                    <td class="border-khusus no-border-left no-border-right">:</td>
                                    <td colspan="4" class="border-khusus no-border-left" id="tanggal-nomor-surat">
                                        {{ $disposisi->tanggal_surat }} & {{ $disposisi->nomor_surat }}
                                    </td>
                                </tr>

                                <!-- Baris 4 -->
                                <tr>
                                    <td class="border-khusus no-border-right">Dari</td>
                                    <td class="border-khusus no-border-left no-border-right">:</td>
                                    <td colspan="4" class="border-khusus no-border-left">{{ $disposisi->asal_surat }}
                                    </td>
                                </tr>

                                <!-- Baris 5 - Ringkasan Isi -->
                                <tr class="row-summary">
                                    <td class="border-khusus no-border-right">Ringkasan Isi</td>
                                    <td class="border-khusus no-border-left no-border-right">:</td>
                                    <td colspan="4" class="border-khusus no-border-left">{{ $disposisi->ringkasan }}</td>
                                </tr>

                                <!-- Baris 6 -->
                                <tr>
                                    <td class="border-khusus no-border-right">Lampiran</td>
                                    <td class="border-khusus no-border-left no-border-right">:</td>
                                    <td colspan="4" class="border-khusus no-border-left">-</td>
                                </tr>

                                <!-- Header Disposisi -->
                                <tr>
                                    <th colspan="3" class="center-text">Disposisi</th>
                                    <th colspan="2" class="center-text">Diteruskan kepada</th>
                                    <th class="center-text">Paraf</th>
                                </tr>

                                <!-- Isi Disposisi -->
                                <tr class="row-disposisi">
                                    <td colspan="3" rowspan="4" class="col-disposisi">{{ $disposisi->disposisi }}</td>
                                    <td class="col-penerima">1. Ka.KPLP</td>
                                    <td class="col-checklist center-text">{{ $disposisi->kakplp ? '✓' : ' ' }}</td>
                                    <td rowspan="4" style="text-align: center;">
                                        <img src="{{ asset('storage/logo/paraf.png') }}" alt="Logo"
                                            style="width: 20%; height: 20%; display: block; margin-left: auto; margin-right: auto;">
                                    </td>
                                </tr>
                                <tr class="row-disposisi">
                                    <td class="col-penerima">2. Kasi Binadik</td>
                                    <td class="col-checklist center-text">{{ $disposisi->kasibinadik ? '✓' : ' ' }}</td>
                                </tr>
                                <tr class="row-disposisi">
                                    <td class="col-penerima">3. Kasi Kamtib</td>
                                    <td class="col-checklist center-text">{{ $disposisi->kasikamtib ? '✓' : ' ' }}</td>
                                </tr>
                                <tr class="row-disposisi">
                                    <td class="col-penerima">4. Kasubag TU</td>
                                    <td class="col-checklist center-text">{{ $disposisi->kasubagtu ? '✓' : ' ' }}</td>
                                </tr>

                            </table>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                // Format tanggal penerimaan
                                const tanggalCell = document.getElementById('tanggal-surat');
                                if (tanggalCell) {
                                    const tanggalText = tanggalCell.textContent.trim();
                                    const tanggal = new Date(tanggalText);
                                    const options = {
                                        weekday: 'long',
                                        year: 'numeric',
                                        month: 'long',
                                        day: 'numeric'
                                    };
                                    tanggalCell.textContent = tanggal.toLocaleDateString('id-ID', options);
                                }

                                // Format tanggal dan nomor surat
                                const tanggalNomorSuratCell = document.getElementById('tanggal-nomor-surat');
                                if (tanggalNomorSuratCell) {
                                    const teksLengkap = tanggalNomorSuratCell.textContent.trim();
                                    const [tanggal, nomorSurat] = teksLengkap.split(' & ');
                                    const tanggalObj = new Date(tanggal);
                                    const options = {
                                        weekday: 'long',
                                        year: 'numeric',
                                        month: 'long',
                                        day: 'numeric'
                                    };
                                    const tanggalFormatted = tanggalObj.toLocaleDateString('id-ID', options);
                                    tanggalNomorSuratCell.textContent = `${tanggalFormatted} & ${nomorSurat}`;
                                }
                            });
                        </script>

                        <div class="form-group mb-3">
                            <label class="font-weight-bold">File Surat</label>

                            @if ($disposisi->file_surat)
                                <!-- Tampilan Desktop (default) -->
                                <div id="desktop-pdf-viewer" class="desktop-view">
                                    <embed src="{{ asset('storage/' . $disposisi->file_surat) }}" type="application/pdf"
                                        class="pdf-viewer" width="100%" height="600px">
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
                                const pdfUrl = "{{ asset('storage/' . $disposisi->file_surat) }}";
                                renderPdf(pdfUrl);
                            } else {
                                // Tampilkan tampilan desktop (default)
                                document.getElementById('desktop-pdf-viewer').style.display = 'block';
                                document.getElementById('mobile-pdf-viewer').style.display = 'none';
                            }
                        </script>
                    </body>

                </div>
            </div>
        </div>
    </div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Products - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h3>Data Detail Trolling</h3>
                        <br>
                        <table class="table table-bordered" style="width: 100%;">
                                <tr>
                                    <td>Lokasi </td>
                                    <td>: {{ $trolling->nama_lokasi }}</td>
                                </tr>
                                <tr>
                                    <td>Tanggal </td>
                                    <td>: {{ $trolling->tanggal }}</td>
                                </tr>
                                <tr>
                                    <td>Jam </td>
                                    <td>: {{ $trolling->jam }}</td>
                                </tr>
                                <tr>
                                    <td>Rupam </td>
                                    <td>: {{ $trolling->rupam }}</td>
                                </tr>
                                <tr>
                                    <td>Petugas </td>
                                    <td>: {{ $trolling->petugas }}</td>
                                </tr>
                        </table>

                        <iframe
                        width="400"
                        height="450"
                        style="border:0"
                        loading="lazy"
                        allowfullscreen
                        src="{{ $trolling->koordinat . '&z=15&output=embed' }}">
                        </iframe>

                        {{-- <h5>{{ $trolling->koordinat }}</h5> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Products - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #qr-reader {
          width: 200px; /* Default width */
          height: 100px; /* Default height */
          border: 1px solid #ccc; /* Optional: Add a border for better visibility */
        }

        /* Media query for devices with a width of 600px or less */
        @media (max-width: 600px) {
          #qr-reader {
            width: 100%; /* Adjust width to 80% of the screen width */
            height: auto; /* Adjust height to maintain aspect ratio */
          }
        }

        /* Media query for devices with a width of 400px or less */
        @media (max-width: 400px) {
          #qr-reader {
            width: 100%; /* Adjust width to 100% of the screen width */
            height: auto; /* Adjust height to maintain aspect ratio */
          }
        }
      </style>


          <!-- Menghubungkan Bootstrap Bundle (JS) -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

          <!-- Menghubungkan jQuery -->
          <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

          <!-- Menghubungkan Bootstrap Datepicker untuk tanggal -->
          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.id.min.js"></script>

          <!-- script untuk map -->
            <script>
            function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            } else {
                alert("Geolocation tidak didukung oleh browser ini.");
            }
            }

            function showPosition(position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                var iframe = document.getElementById('mapframe');
                var googleMapLink = "https://maps.google.com/maps?q=" + latitude + "," + longitude;
                document.getElementById('koordinat').value = googleMapLink;
                //view maps
                iframe.src = "https://maps.google.com/maps?q=" + latitude + "," + longitude + "&z=15&output=embed";
            }
            </script>
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('trollings.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <div id="qr-reader"></div>
                                        <label class="font-weight-bold">Nama Lokasi</label>
                                        <input type="text" class="form-control @error('nama_lokasi') is-invalid @enderror" name="nama_lokasi" id="nama_lokasi" value="{{ old('nama_lokasi') }}" placeholder="Masukkan nama_lokasi Product">

                                        <!-- error message untuk nama_lokasi -->
                                        @error('nama_lokasi')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <script src="https://unpkg.com/html5-qrcode"></script>
                                        <script>
                                        let html5QrCode;

                                        function onScanSuccess(decodedText, decodedResult) {
                                            // Update the 'lokasi' field with the scanned QR code data
                                            document.getElementById("nama_lokasi").value = decodedText;
                                            // mengambil koordinat
                                            getLocation();
                                            // Stop the QR code scanner and hide the video element
                                            html5QrCode.stop().then(ignore => {
                                            document.getElementById("qr-reader").style.display = 'none';
                                            }).catch(err => {
                                            console.error("Unable to stop scanning:", err);
                                            });
                                        }

                                        function onCameraScanSuccess(qrCodeMessage) {
                                            // Update the 'nama_lokasi' field with the scanned QR code data
                                            document.getElementById("nama_lokasi").value = qrCodeMessage;
                                            // Stop the QR code scanner and hide the video element
                                            html5QrCode.stop().then(ignore => {
                                            document.getElementById("qr-reader").style.display = 'none';
                                            }).catch(err => {
                                            console.error("Unable to stop scanning:", err);
                                            });
                                        }

                                        function onCameraScanError(errorMessage) {
                                            // Handle error, display a message or log the error
                                            console.error("Error scanning QR Code:", errorMessage);
                                        }

                                        Html5Qrcode.getCameras().then(devices => {
                                            if (devices && devices.length) {
                                            var cameraId = devices[1].id; // Choose the first camera 1 untuk kamera belakng, 0 untuk kamera depan

                                            html5QrCode = new Html5Qrcode("qr-reader");
                                            html5QrCode.start(
                                                cameraId,
                                                { fps: 10, qrbox: { width: 260, height: 260 } }, // Frame per second and QR code box size
                                                onScanSuccess,
                                                onCameraScanError
                                            ).catch(err => {
                                                console.error("Unable to start scanning:", err);
                                            });
                                            }
                                        }).catch(err => {
                                            console.error("Unable to get cameras:", err);
                                        });
                                        </script>


                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">tanggal</label>
                                        <input type="text" class="form-control @error('tanggal') is-invalid @enderror" name="tanggal" id="tanggal" value="{{ old('tanggal') }}" placeholder="Masukkan tanggal Product">

                                        <!-- error message untuk tanggal -->
                                        @error('tanggal')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <script>
                                            $(document).ready(function(){
                                            $('#tanggal').datepicker({
                                                format: 'DD , dd M yyyy',
                                                language: 'id',
                                                autoclose: true
                                            });
                                            $('#tanggal').datepicker('setDate', new Date())
                                            });
                                        </script>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">jam</label>
                                        <input type="text" class="form-control @error('jam') is-invalid @enderror" name="jam" id="jam" value="{{ old('jam') }}" placeholder="Masukkan jam Product">

                                        <!-- error message untuk jam -->
                                        @error('jam')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        <script>
                                            function setTime() {
                                                var now = new Date();
                                                var hours = now.getHours().toString().padStart(2, '0');
                                                var minutes = now.getMinutes().toString().padStart(2, '0');
                                                var seconds = now.getSeconds().toString().padStart(2, '0');
                                                var timeString = hours + ':' + minutes ;
                                                $('#jam').val(timeString);
                                            }

                                            setTime();
                                            setInterval(setTime, 1000); // Update waktu setiap detik
                                        </script>
                                    </div>
                                </div>



                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">rupam</label>
                                        <input type="text" class="form-control @error('rupam') is-invalid @enderror" name="rupam" value="{{Auth::user()->rupam}}" placeholder="Masukkan rupam Product">

                                        <!-- error message untuk rupam -->
                                        @error('rupam')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="font-weight-bold">petugas</label>
                                        <input type="text" class="form-control @error('petugas') is-invalid @enderror" name="petugas" value="{{Auth::user()->name}}" placeholder="Masukkan petugas Product">

                                        <!-- error message untuk petugas -->
                                        @error('petugas')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label class="form-label">koordinat</label>
                                        <input type="text" class="form-control" id="koordinat" name="koordinat" hidden>
                                        <iframe id="mapframe" class="form-control"></iframe>

                                        <!-- error message untuk koordinat -->
                                        @error('koordinat')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>


                            <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description' );
    </script>
</body>
</html>

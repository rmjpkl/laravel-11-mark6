<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New users - SantriKoding.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <h3>Tambah Data User</h3>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">

                            @csrf


                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama">

                                <!-- error message untuk name -->
                                @error('name')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Username</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" placeholder="Masukkan NIP">

                                <!-- error message untuk username -->
                                @error('username')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Password</label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" placeholder="Masukkan Password">

                                <!-- error message untuk password -->
                                @error('password')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Rupam</label><br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rupam" value="rupam 1" id="rupam1" {{ old('rupam') == 'rupam 1' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="rupam1">Rupam 1</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rupam" value="rupam 2" id="rupam2" {{ old('rupam') == 'rupam 2' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="rupam2">Rupam 2</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rupam" value="rupam 3" id="rupam3" {{ old('rupam') == 'rupam 3' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="rupam3">Rupam 3</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="rupam" value="rupam 4" id="rupam4" {{ old('rupam') == 'rupam 4' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="rupam4">Rupam 4</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- error message untuk rupam -->
                                @error('rupam')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Jabatan</label>
                                <select class="form-control @error('jabatan') is-invalid @enderror" name="jabatan">
                                    <option value="">Pilih Jabatan</option>
                                    <option value="Ka.KPLP" {{ old('jabatan') == 'Ka.KPLP' ? 'selected' : '' }}>Ka.KPLP</option>
                                    <option value="Staf KPLP" {{ old('jabatan') == 'Staf KPLP' ? 'selected' : '' }}>Staf KPLP</option>
                                    <option value="Ka.Rupam" {{ old('jabatan') == 'Ka.Rupam' ? 'selected' : '' }}>Ka.Rupam</option>
                                    <option value="Waka.Rupam" {{ old('jabatan') == 'Waka.Rupam' ? 'selected' : '' }}>Waka.Rupam</option>
                                    <option value="P2U" {{ old('jabatan') == 'P2U' ? 'selected' : '' }}>P2U</option>
                                    <option value="Anggota Jaga" {{ old('jabatan') == 'Anggota Jaga' ? 'selected' : '' }}>Anggota Jaga</option>
                                    <option value="Ka.Lapas" {{ old('jabatan') == 'Ka.Lapas' ? 'selected' : '' }}>Ka.Lapas</option>
                                    <option value="lainnya" {{ old('jabatan') == 'lainnya' ? 'selected' : '' }}>Lainnya</option>
                                </select>

                                <!-- error message untuk jabatan -->
                                @error('jabatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                            <div class="form-group mb-3">
                                <label class="font-weight-bold" for="is_admin">Is Admin:</label>
                                <input type="checkbox" id="is_admin" name="is_admin" value="1" {{ old('is_admin') ? 'checked' : '' }}>
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

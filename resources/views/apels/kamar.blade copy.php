<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kamar</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        /* Custom CSS to reduce font size and padding */
        table {
            font-size: 12px;
        }
        table th, table td {
            padding: 5px;
        }

        #data-count {
            font-size: 24px; /* Ubah nilai ini sesuai kebutuhan */
        }

        .btn-full-width {
            width: 100%;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
        }

        .btn-left {
            margin-right: auto;
            width: 40%;
        }

        .btn-right {
            margin-left: auto;
            width: 40%;
        }

    </style>

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

</head>
<body>
    <div class="container mt-12">
        <div class="menu text-right">
            <br>
            <a href="{{ route('apel') }}" class="btn btn-info">
                <i class="fas fa-home"></i> | Apel Blok Hunian
            </a>
        </div>
        <h1>Blok {{ $filter }}</h1>

        <div id="data-count" class="mb-3"></div>
        <form action="{{ route('points.store') }}" method="POST">
            @csrf
            <input type="hidden" name="rupam" value="{{ Auth::user()->rupam }}">
            <input type="hidden" name="filter" value="{{ $filter }}">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Nama</th>
                        <th>Kamar</th>
                        <th>Select</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                        <tr>
                            <td>{{ $row['nama'] }}</td>
                            <td>{{ $row['kamar'] }}</td>
                            <td><input type="checkbox" name="selected_data[]" value="{{ $row['nama'] }}"></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button type="submit" class="btn btn-danger btn-full-width">Tambah</button>
        </form>

        <div class="btn-container mt-3">
            <?php
            $filter = $filter;
            $parts = explode('.', $filter);
            $newFilterLeft = $parts[0] . '.' . ($parts[1] - 1);
            ?>
            <a href="{{ route('kamar', ['filter' => $newFilterLeft]) }}" class="btn btn-sm btn-primary btn-left"> << {{ $newFilterLeft }}</a>

            <?php
            $newFilterRight = $parts[0] . '.' . ($parts[1] + 1);
            ?>
            <a href="{{ route('kamar', ['filter' => $newFilterRight]) }}" class="btn btn-sm btn-primary btn-right">{{ $newFilterRight }} >></a>
        </div>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var rowCount = document.querySelectorAll('tbody tr').length;
            document.getElementById('data-count').innerText = 'Jumlah ' + rowCount + ' Orang';
        });
    </script>
</body>
</html>

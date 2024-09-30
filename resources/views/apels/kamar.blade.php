

@extends('master')

@section('konten')
    <div class="container mt-5">
        <div class="d-flex justify-content-end">
            <a href="{{ route('apel') }}" class="btn btn-info">
                <i class="fas fa-home"></i> | Apel Blok Hunian
            </a>
        </div>
        
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            {{-- mengimport cdn - cdn --}}

                        </head>
                        <h1>Blok {{ $filter }}</h1>

                            <div id="data-count" class="mb-3"></div>
                            <form action="{{ route('points.store') }}" method="POST">
                                <input type="hidden" name="rupam" value="{{ Auth::user()->rupam }}">
                                <input type="hidden" name="filter" value="{{ $filter }}">
                            @csrf
                            <div style="overflow-x:auto;">
                                <table
                                        id="example"
                                        class="table table-striped table-bordered dt-responsive nowrap"
                                        cellspacing="0"
                                        width="100%"
                                    >
                                    <thead>
                                        <tr>
                                            <th scope="col">NAMA</th>
                                              <th scope="col">KAMAR</th>
                                            <th scope="col">SELECT</th>
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
                                <button type="submit" class="btn btn-danger w-100">Tambah</button>
                            </form>
                            </div>

                            <div class="btn-container mt-3 d-flex justify-content-between">
                                <?php
                                $filter = $filter;
                                $parts = explode('.', $filter);
                                $newFilterLeft = $parts[0] . '.' . ($parts[1] - 1);
                                ?>
                                <a href="{{ route('kamar', ['filter' => $newFilterLeft]) }}" class="btn btn-primary btn-left"> < {{ $newFilterLeft }}</a>
                            
                                <?php
                                $newFilterRight = $parts[0] . '.' . ($parts[1] + 1);
                                ?>
                                <a href="{{ route('kamar', ['filter' => $newFilterRight]) }}" class="btn btn-primary">{{ $newFilterRight }} ></a>
                            </div>
                            
                    
                        <!-- Include Bootstrap JS and dependencies -->
                        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                        {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var rowCount = document.querySelectorAll('tbody tr').length;
                                document.getElementById('data-count').innerText = 'Jumlah ' + rowCount + ' Orang';
                            });
                        </script>
            </div>
        </div>
    </div>
</div>

 
  
@endsection

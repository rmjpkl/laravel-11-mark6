@extends('master')

@section('konten')
<head>
 <style>
    body {
      padding: 20px;
      background-color: #ffffff;
      color: #000000;
      text-align: center;
    }

    .menu {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 10px;
    }

    .menu a {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-decoration: none;
      color: rgb(0, 0, 0);
      width: 80px;
      height: 80px;
      border: none;
      border-radius: 12px;
      /* font-size: 10px; */
    }

    .icon  {
    font-size: 30px; /* Ukuran sedang */
    }

    .menu a span {
      font-size: 10px; /* Ukuran teks */
      white-space: nowrap; /* Mencegah teks membungkus ke baris berikutnya */
      overflow: hidden; /* Menyembunyikan teks yang melampaui batas kotak */
      text-overflow: ellipsis; /* Menambahkan elipsis (...) jika teks terlalu panjang */
    }
    @media (min-width: 768px) {
      .menu {
        grid-template-columns: repeat(5, 1fr);
      }
    }

    footer {
      margin-top: auto;
      position: absolute;
      bottom: 0;
      width: 100%;
      padding: 10px 0;
    }
  </style>
</head>

<body>
    <br />
    <div class="menu">
        <a href="{{ route('trolling') }}" class="btn btn-primary">
            <i class="fa fa-list-alt icon"></i>
            <span>Trolling</span>
        </a>
        @if (Auth::check() && Auth::user()->is_admin == 1)
            <a href="{{ route('users.index') }}" class="btn btn-info">
                <i class="fa fa-id-card icon"></i>
                <span>User</span>
            </a>
        @endif

        <a href="{{ route('spreadsheets.updatepenghuni') }}" class="btn btn-primary">
            <i class="fa fa-table icon"></i>
            <span>Update <br> Isi Penguni</span>
        </a>

        <a href="{{ route('spreadsheets.lokasi') }}" class="btn btn-danger">
            <i class="fa fa-male icon"></i>
            <span>Lokasi <br> Kamar WBP</span>
        </a>

        <a href="{{ route('points.index') }}" class="btn btn-warning">
            <i class="fa fa-file icon"></i>
            <span>Point</span>
        </a>

        <a href="{{ route('apel') }}" class="btn btn-success">
            <i class="fa fa-check-square icon"></i>
            <span>Apel <br> Penghuni</span>
        </a>
    </div>


</body>
@endsection






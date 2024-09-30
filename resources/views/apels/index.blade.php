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
    font-size: 25px; /* Ukuran sedang */
    }

    .menu a span {
      font-size: 14px; /* Ukuran teks */
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
    <h2>Apel Blok Hunian</h2>
    <br>
    <div class="menu">
        <a href="{{ route('bloka') }}" class="btn btn-info">
            <i class="fa fa fa-address-card icon"></i>
            <span>Blok A</span>
        </a>
        <a href="{{ route('blokb') }}" class="btn btn-primary">
            <i class="fa fa fa-address-card icon"></i>
            <span>Blok B</span>
        </a>
        <a href="{{ route('blokc') }}" class="btn btn-success">
            <i class="fa fa fa-address-card icon"></i>
            <span>Blok C</span>
        </a>
        <a href="{{ route('blokd') }}" class="btn btn-warning">
            <i class="fa fa fa-address-card icon"></i>
            <span>Blok D</span>
        </a>
        <a href="{{ route('bloke') }}" class="btn btn-danger">
            <i class="fa fa fa-address-card icon"></i>
            <span>Blok E</span>
        </a>
        <a href="{{ route('blokf') }}" class="btn btn-success">
            <i class="fa fa fa-address-card icon"></i>
            <span>Blok F</span>
        </a>


    </div>


</body>
@endsection

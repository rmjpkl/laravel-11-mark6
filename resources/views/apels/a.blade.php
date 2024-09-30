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


    .menu a span {
      font-size: 30px; /* Ukuran teks */
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
    <h2>Blok A</h2>
    <br>
    <br />
    <div class="menu">
        <a href="{{ route('kamar', ['filter' => 'A.1']) }}" class="btn btn-info">
            <span>A.1</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'A.2']) }}" class="btn btn-info">
            <span>A.2</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'A.3']) }}" class="btn btn-info">
            <span>A.3</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'A.4']) }}" class="btn btn-info">
            <span>A.4</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'A.5']) }}" class="btn btn-info">
            <span>A.5</span>
        </a>


    </div>


</body>
@endsection

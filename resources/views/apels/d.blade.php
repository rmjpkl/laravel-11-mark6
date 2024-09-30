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
    <h2>Blok D</h2>
    <br>
    <br />
    <div class="menu">
        <a href="{{ route('kamar', ['filter' => 'D.1']) }}" class="btn btn-warning">
            <span>D.1</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'D.2']) }}" class="btn btn-warning">
            <span>D.2</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'D.3']) }}" class="btn btn-warning">
            <span>D.3</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'D.4']) }}" class="btn btn-warning">
            <span>D.4</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'D.5']) }}" class="btn btn-warning">
            <span>D.5</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'D.6']) }}" class="btn btn-warning">
            <span>D.6</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'D.7']) }}" class="btn btn-warning">
            <span>D.7</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'D.8']) }}" class="btn btn-warning">
            <span>D.8</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'D.9']) }}" class="btn btn-warning">
            <span>D.9</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'D.10']) }}" class="btn btn-warning">
            <span>D.10</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'D.11']) }}" class="btn btn-warning">
            <span>D.11</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'D.12']) }}" class="btn btn-warning">
            <span>D.12</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'D.13']) }}" class="btn btn-warning">
            <span>D.13</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'D.14']) }}" class="btn btn-warning">
            <span>D.14</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'D.15']) }}" class="btn btn-warning">
            <span>D.15</span>
        </a>




    </div>


</body>
@endsection

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
    <h2>Blok B</h2>
    <br>
    <br />
    <div class="menu">
        <a href="{{ route('kamar', ['filter' => 'B.1']) }}" class="btn btn-primary">
            <span>B.1</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'B.2']) }}" class="btn btn-primary">
            <span>B.2</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'B.3']) }}" class="btn btn-primary">
            <span>B.3</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'B.4']) }}" class="btn btn-primary">
            <span>B.4</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'B.5']) }}" class="btn btn-primary">
            <span>B.5</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'B.6']) }}" class="btn btn-primary">
            <span>B.6</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'B.7']) }}" class="btn btn-primary">
            <span>B.7</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'B.8']) }}" class="btn btn-primary">
            <span>B.8</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'B.9']) }}" class="btn btn-primary">
            <span>B.9</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'B.10']) }}" class="btn btn-primary">
            <span>B.10</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'B.11']) }}" class="btn btn-primary">
            <span>B.11</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'B.12']) }}" class="btn btn-primary">
            <span>B.12</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'B.13']) }}" class="btn btn-primary">
            <span>B.13</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'B.14']) }}" class="btn btn-primary">
            <span>B.14</span>
        </a>
        <a href="{{ route('kamar', ['filter' => 'B.15']) }}" class="btn btn-primary">
            <span>B.15</span>
        </a>




    </div>


</body>
@endsection

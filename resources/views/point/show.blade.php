@extends('master')

@section('konten')
        {{-- untuk mengatur sekala PRINT --}}
          <script>
            window.onbeforeprint = function() {
                document.body.style.zoom = '0.66'; // Sesuaikan skala sesuai kebutuhan
            };

            window.onafterprint = function() {
                document.body.style.zoom = '1'; // Kembalikan skala setelah mencetak
            };

        </script>
        

  
    <div class="container mt-5">
        <div id="printableArea">
        <div>
            <h2 class="text-center my-5">Hasil Perhitungan Pelanggaran dua bulan terkahir <a href="#" class="fa fa-print" onclick="printSection()"> Print Section</a></h2> 
       </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Aplikasi KPLP</title>
                            @include('cdntable')
                        </head>

                            

                                <h2 id="namaPelanggar"></h2>
                                

                                <div class="progress mb-4">
                                    <div id="progressBar" class="progress-bar bg-danger" style="width:0%"><div id="textprogressBar"></div></div>
                                </div>
                            

                                    <table id="hasilTable" class="table table-striped table-bordered dt-responsive nowrap" >  
                                        <thead class="table-dark">
                                            <tr>
                                                <th>PELANGGARAN</th>
                                                <th>JUMLAH</th>
                                                <th>POINT</th>
                                                <th>TOTAL</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Hasil perhitungan akan ditambahkan di sini -->
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th colspan="3">Grand Total</th>
                                                <th id="grandTotal"></th>
                                            </tr>
                                            <tr>
                                                <th colspan="3">Kesimpulan</th>
                                                <th id="penilaian"></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    

                                


                               <table
                                        id="example"
                                        class="table table-striped table-bordered dt-responsive nowrap"
                                        cellspacing="0"
                                        width="100%"
                                    >
                                    <thead class="table-dark">
                                        <tr>
                                            <th scope="col">NAMA</th>
                                            <th scope="col">PELANGGARAN</th>
                                            <th scope="col">POINT</th>
                                            {{-- <th scope="col">TOTAL</th> --}}
                                            <th scope="col">TANGGAL</th>
                                            <th scope="col">RUPAM</th>
                                            <th scope="col" style="width: 20%">ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($points as $point)
                                            <tr>
                                                <td>{{ $point->nama }}</td>
                                                <td>{{ $point->pelanggaran->name }}</td>
                                                <td>{{ $point->pelanggaran->point }}</td>
                                                {{-- <td>{{ $point->total }}</td> --}}
                                                <td>{{ $point->created_at }}</td>
                                                <td>{{ $point->rupam }}</td>
                                                <td class="text-center">
                                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('points.destroy', $point->id) }}" method="POST">
                                                        <a href="{{ route('points.show', $point->nama) }}" class="btn btn-sm btn-primary">
                                                            <i class="fas fa-eye"></i> <!-- FontAwesome icon for 'show' -->
                                                        </a>
                                                        @csrf
                                                        @method('DELETE')
                                                        {{-- @if (Auth::check() && Auth::user()->is_admin == 1) --}}
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="fas fa-trash-alt"></i> <!-- FontAwesome icon for 'delete' -->
                                                        </button>
                                                        {{-- @endif --}}
                                                    </form>

                                                </td>
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger">
                                                Data points belum Tersedia.
                                            </div>
                                        @endforelse
                                    </tbody>
                                </table>
                            
                        </div>


                            {{-- MENGHITUNG PENILAIAN --}}
                            <script>
                                // Ambil data dari tabel
                                const table = document.getElementById('example');
                                const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
                                const violations = [];
                                let namaPelanggar = '';
                        
                                for (let i = 0; i < rows.length; i++) {
                                    const cells = rows[i].getElementsByTagName('td');
                                    const violation = {
                                        nama: cells[0].innerText,
                                        pelanggaran: cells[1].innerText,
                                        point: parseInt(cells[2].innerText),
                                        tanggal: cells[3].innerText,
                                        rupam: cells[4].innerText
                                    };
                                    violations.push(violation);
                                    namaPelanggar = cells[0].innerText; // Asumsikan semua baris memiliki nama yang sama
                                }
                        
                                // Hitung jumlah pelanggaran
                                const counts = {};
                                let grandTotal = 0;
                        
                                violations.forEach(function (violation) {
                                    const type = violation.pelanggaran;
                                    const points = violation.point;
                        
                                    if (!counts[type]) {
                                        counts[type] = { jumlah: 0, point: points, total: 0 };
                                    }
                        
                                    counts[type].jumlah += 1;
                                    counts[type].total += points;
                                    grandTotal += points;
                                });
                        
                                // Tampilkan hasil dalam tabel HTML
                                const hasilTable = document.getElementById('hasilTable').getElementsByTagName('tbody')[0];
                        
                                for (const [pelanggaran, data] of Object.entries(counts)) {
                                    const row = document.createElement('tr');
                                    const pelanggaranCell = document.createElement('td');
                                    const jumlahCell = document.createElement('td');
                                    const pointCell = document.createElement('td');
                                    const totalCell = document.createElement('td');
                        
                                    pelanggaranCell.innerText = pelanggaran;
                                    jumlahCell.innerText = data.jumlah;
                                    pointCell.innerText = data.point;
                                    totalCell.innerText = data.total;
                        
                                    row.appendChild(pelanggaranCell);
                                    row.appendChild(jumlahCell);
                                    row.appendChild(pointCell);
                                    row.appendChild(totalCell);
                                    hasilTable.appendChild(row);
                                }
                        
                                // Tampilkan grand total
                                document.getElementById('grandTotal').innerText = grandTotal;
                        
                                // Tampilkan nama pelanggar
                                document.getElementById('namaPelanggar').innerText = `Nama :  ${namaPelanggar}`;
                        
                                // Tambahkan kondisi untuk menilai grand total
                                let penilaian = '';
                                if (grandTotal > 100) {
                                    penilaian = 'Sangat Buruk';
                                } else if (grandTotal > 70) {
                                    penilaian = 'Buruk';
                                } else if (grandTotal > 40) {
                                    penilaian = 'Baik';
                                } else if (grandTotal > 0) {
                                    penilaian = 'Sangat Baik';
                                } else {
                                    penilaian = 'Tidak Ada Pelanggaran';
                                }
                        
                                // Tampilkan penilaian
                                document.getElementById('penilaian').innerText = penilaian;

                                //progress bar
                                let progressValue = grandTotal;
                                // let progressValue = 150;
                                document.getElementById('progressBar').style.width = progressValue + '%';

                                //keterangan progress bar
                                document.getElementById('textprogressBar').innerText = progressValue + '%';
                            </script>
                

                            <script>
                                $(document).ready(function () {
                                  new DataTable("#example", {
                                    responsive: true,
                                    // rowReorder: {
                                    //   selector: "td:nth-child(2)",
                                    // },
                                    order: [[2, "desc"]],
                                    // order: [[2, "asc"]],
                                    // dom: "Blfrtip", // Add 'l' to include the length change control
                                    // buttons: ["copy", "csv", "excel", "pdf", "print"],
                                  });
                                });
                              </script>

                              
                            

                            <script>
                                function printSection() {
                                    var printContents = document.getElementById('printableArea').innerHTML;
                                    var originalContents = document.body.innerHTML;
                            
                                    document.body.innerHTML = printContents;
                                    window.print();
                                    document.body.innerHTML = originalContents;
                                }
                            </script>
        

                        {{-- {{ $trollings->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        //message with sweetalert
        @if(session('success'))
            Swal.fire({
                icon: "success",
                title: "BERHASIL",
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @elseif(session('error'))
            Swal.fire({
                icon: "error",
                title: "GAGAL!",
                text: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 2000
            });
        @endif


    </script>


@endsection

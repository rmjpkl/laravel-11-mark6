@extends('master')

@section('konten')
    <style>
        .table td,
        .table th {
            padding: 0.7;
            /* Menghilangkan padding dalam sel */
            white-space: nowrap;
            /* Membuat lebar sel sesuai dengan teks */
        }

        .table td {
            text-align: right;
            /* Membuat teks dalam sel rata kanan */
        }

        .table th,
        .table td:nth-child(1) {
            text-align: center;
            /* Membuat teks dalam kolom 'KMR' rata tengah */
        }

        .table-jumlahtotal td:first-child {
            text-align: left;
            /* Membuat teks dalam kolom pertama rata kiri */
        }

        .table-jumlahtotal td:last-child {
            text-align: right;
            /* Membuat teks dalam kolom kedua rata kanan */
        }

        .table-jumlahtotal tr:last-child td {
            font-weight: bold;
            /* Mempertebal teks pada baris terakhir */
        }
    </style>
    <div class="container">
        <div class="card border-0 shadow-sm rounded mb-5 mt-5">
            <div class="card-body">
                <div class="text-center mb-5">
                    <h4>
                        DAFTAR ISI KAMAR PENGHUNI
                    </h4>
                    <h4>
                        LAPAS KELAS IIB BATANG
                    </h4>
                    <h4 id="currentDateTime"></h4>
                    <script>
                        function updateDateTime() {
                            const now = new Date();
                            const options = {
                                weekday: 'long',
                                day: '2-digit',
                                month: 'long',
                                year: 'numeric',
                                hour: '2-digit',
                                minute: '2-digit'
                            };
                            const formattedDate = now.toLocaleDateString('id-ID', options) + " WIB";

                            document.getElementById('currentDateTime').textContent = formattedDate;
                        }

                        updateDateTime();
                        setInterval(updateDateTime, 60000); // Memperbarui setiap 1 menit
                    </script>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mb-2">
                            <h5 class="text-center">A. ANGGREK</h5>
                            <table class="table table-bordered table-striped">
                                <thead class="table-info">
                                    <tr>
                                        <th>KMR</th>
                                        <th>TH</th>
                                        <th>NP</th>
                                        <th>JML</th>
                                        <th>KAP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                    </tr>
                                <tfoot class="table-info">
                                    <tr>
                                        <th>TOTAL</th>
                                        <th>TH</th>
                                        <th>NP</th>
                                        <th>JML</th>
                                        <th>KAP</th>
                                    </tr>
                                </tfoot>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group mb-2">
                            <h5 class="text-center">B. BAUGENVILE</h5>
                            <table class="table table-bordered table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th>KMR</th>
                                        <th>TH</th>
                                        <th>NP</th>
                                        <th>JML</th>
                                        <th>KAP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>9</td>
                                        <td>9</td>
                                        <td>9</td>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>11</td>
                                        <td>11</td>
                                        <td>11</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>13</td>
                                        <td>13</td>
                                        <td>13</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>14</td>
                                        <td>14</td>
                                        <td>14</td>
                                        <td>14</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>15</td>
                                        <td>15</td>
                                        <td>15</td>
                                        <td>15</td>
                                    </tr>
                                </tbody>
                                <tfoot class="table-primary">
                                    <tr>
                                        <th>TOTAL</th>
                                        <th>TH</th>
                                        <th>NP</th>
                                        <th>JML</th>
                                        <th>KAP</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group mb-2">
                            <h5 class="text-center">C. CLAUDIA</h5>
                            <table class="table table-bordered table-striped">
                                <thead class="table-success">
                                    <tr>
                                        <th>KMR</th>
                                        <th>TH</th>
                                        <th>NP</th>
                                        <th>JML</th>
                                        <th>KAP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>9</td>
                                        <td>9</td>
                                        <td>9</td>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>11</td>
                                        <td>11</td>
                                        <td>11</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>13</td>
                                        <td>13</td>
                                        <td>13</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>14</td>
                                        <td>14</td>
                                        <td>14</td>
                                        <td>14</td>
                                    </tr>

                                <tfoot class="table-success">
                                    <tr>
                                        <th>TOTAL</th>
                                        <th>TH</th>
                                        <th>NP</th>
                                        <th>JML</th>
                                        <th>KAP</th>
                                    </tr>
                                </tfoot>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group mb-2">
                            <h5 class="text-center">D. DAHLIA</h5>
                            <table class="table table-bordered table-striped">
                                <thead class="table-warning">
                                    <tr>
                                        <th>KMR</th>
                                        <th>TH</th>
                                        <th>NP</th>
                                        <th>JML</th>
                                        <th>KAP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>9</td>
                                        <td>9</td>
                                        <td>9</td>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>11</td>
                                        <td>11</td>
                                        <td>11</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>13</td>
                                        <td>13</td>
                                        <td>13</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>14</td>
                                        <td>14</td>
                                        <td>14</td>
                                        <td>14</td>
                                    </tr>
                                    <tr>
                                        <td>15</td>
                                        <td>15</td>
                                        <td>15</td>
                                        <td>15</td>
                                        <td>15</td>
                                    </tr>
                                <tfoot class="table-warning">
                                    <tr>
                                        <th>TOTAL</th>
                                        <th>TH</th>
                                        <th>NP</th>
                                        <th>JML</th>
                                        <th>KAP</th>
                                    </tr>
                                </tfoot>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group mb-2">
                            <h5 class="text-center">E. EDELWEIS</h5>
                            <table class="table table-bordered table-striped">
                                <thead class="table-danger">
                                    <tr>
                                        <th>KMR</th>
                                        <th>TH</th>
                                        <th>NP</th>
                                        <th>JML</th>
                                        <th>KAP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>9</td>
                                        <td>9</td>
                                        <td>9</td>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>11</td>
                                        <td>11</td>
                                        <td>11</td>
                                        <td>11</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>12</td>
                                        <td>12</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>13</td>
                                        <td>13</td>
                                        <td>13</td>
                                        <td>13</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>14</td>
                                        <td>14</td>
                                        <td>14</td>
                                        <td>14</td>
                                    </tr>

                                <tfoot class="table-danger">
                                    <tr>
                                        <th>TOTAL</th>
                                        <th>TH</th>
                                        <th>NP</th>
                                        <th>JML</th>
                                        <th>KAP</th>
                                    </tr>
                                </tfoot>
                                </tbody>
                            </table>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="form-group mb-2">
                            <h5 class="text-center">F. FLAMBOYAN</h5>
                            <table class="table table-bordered table-striped">
                                <thead class="table-dark">
                                    <tr>
                                        <th>KMR</th>
                                        <th>TH</th>
                                        <th>NP</th>
                                        <th>JML</th>
                                        <th>KAP</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                        <td>5</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>7</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                        <td>8</td>
                                    </tr>

                                <tfoot class="table-dark">
                                    <tr>
                                        <th>TOTAL</th>
                                        <th>TH</th>
                                        <th>NP</th>
                                        <th>JML</th>
                                        <th>KAP</th>
                                    </tr>
                                </tfoot>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-group mb-2">
                            <h5 class="text-center">KETERANGAN</h5>
                            <table class="table table-bordered table-striped table-jumlahtotal">
                                <tbody>
                                    <tr>
                                        <td>Tahanan</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Narapidana</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Jumlah</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>


                    <div class="col-md-4">
                        <div class="form-group mb-2">
                            <h5 class="text-center">JUMLAH PER BLOK</h5>
                            <table class="table table-bordered table-striped">
                                <thead class="table-success">
                                    <tr>
                                        <th>BLOK</th>
                                        <th>TAHANAN</th>
                                        <th>NARAPIDANA</th>
                                        <th>JUMLAH</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>A</td>
                                        <td>A</td>
                                        <td>A</td>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>B</td>
                                        <td>B</td>
                                        <td>B</td>
                                        <td>B</td>
                                    </tr>
                                    <tr>
                                        <td>C</td>
                                        <td>C</td>
                                        <td>C</td>
                                        <td>C</td>
                                    </tr>
                                    <tr>
                                        <td>D</td>
                                        <td>D</td>
                                        <td>D</td>
                                        <td>D</td>
                                    </tr>
                                    <tr>
                                        <td>E</td>
                                        <td>E</td>
                                        <td>E</td>
                                        <td>E</td>
                                    </tr>
                                    <tr>
                                        <td>F</td>
                                        <td>F</td>
                                        <td>F</td>
                                        <td>F</td>
                                    </tr>

                                <tfoot class="table-success">
                                    <tr>
                                        <th>TOTAL</th>
                                        <th>TH</th>
                                        <th>NP</th>
                                        <th>JML</th>
                                    </tr>
                                </tfoot>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="form-group mb-2">
                            <h5 class="text-center">KETERANGAN</h5>
                            <table class="table table-bordered table-striped">
                                <thead class="table-primary">
                                    <tr>
                                        <th>NO</th>
                                        <th>NAMA</th>
                                        <th>LOKASI KAMAR</th>
                                        <th>KETERANGAN</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>A</td>
                                        <td>A</td>
                                        <td>A</td>
                                        <td>A</td>
                                    </tr>
                                    <tr>
                                        <td>B</td>
                                        <td>B</td>
                                        <td>B</td>
                                        <td>B</td>
                                    </tr>
                                    <tr>
                                        <td>C</td>
                                        <td>C</td>
                                        <td>C</td>
                                        <td>C</td>
                                    </tr>
                                    <tr>
                                        <td>D</td>
                                        <td>D</td>
                                        <td>D</td>
                                        <td>D</td>
                                    </tr>
                                    <tr>
                                        <td>E</td>
                                        <td>E</td>
                                        <td>E</td>
                                        <td>E</td>
                                    </tr>
                                    <tr>
                                        <td>F</td>
                                        <td>F</td>
                                        <td>F</td>
                                        <td>F</td>
                                    </tr>

                                <tfoot class="table-primary">
                                    <tr>
                                        <th>TOTAL</th>
                                        <th>TH</th>
                                        <th>NP</th>
                                        <th>JML</th>
                                    </tr>
                                </tfoot>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

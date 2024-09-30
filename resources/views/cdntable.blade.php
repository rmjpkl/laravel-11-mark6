<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>

        <link
          href="https://cdn.datatables.net/2.1.7/css/dataTables.bootstrap5.css"
          rel="stylesheet"
        />
        <!-- Link untuk mengimpor CSS DataTables dengan tema Bootstrap 5 -->
        <link
          href="https://cdn.datatables.net/rowreorder/1.5.0/css/rowReorder.dataTables.css"
          rel="stylesheet"
        />
        <!-- Link untuk mengimpor CSS RowReorder DataTables -->
        <link
          href="https://cdn.datatables.net/responsive/3.0.3/css/responsive.dataTables.css"
          rel="stylesheet"
        />
        <!-- Link untuk mengimpor CSS Responsive DataTables -->
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"
          rel="stylesheet"
        />
        <!-- Link untuk mengimpor CSS Bootstrap 5 -->

        <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <!-- Script untuk mengimpor library jQuery -->
        <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
        <!-- Script untuk mengimpor library DataTables -->
        <script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>
        <!-- Script untuk mengimpor library DataTables Bootstrap 5 -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <!-- Script untuk mengimpor library Bootstrap 5 bundle (JS dan Popper) -->
        <script src="https://cdn.datatables.net/rowreorder/1.5.0/js/dataTables.rowReorder.js"></script>
        <!-- Script untuk mengimpor library RowReorder DataTables -->
        <script src="https://cdn.datatables.net/rowreorder/1.5.0/js/rowReorder.dataTables.js"></script>
        <!-- Script untuk mengimpor library RowReorder DataTables (duplikat) -->
        <script src="https://cdn.datatables.net/responsive/3.0.3/js/dataTables.responsive.js"></script>
        <!-- Script untuk mengimpor library Responsive DataTables -->
        <script src="https://cdn.datatables.net/responsive/3.0.3/js/responsive.dataTables.js"></script>
        <!-- Script untuk mengimpor library Responsive DataTables (duplikat) -->
        <link
          href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css"
          rel="stylesheet"
        />
        <!-- Link untuk mengimpor CSS Buttons DataTables -->
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
        <!-- Script untuk mengimpor library Buttons DataTables -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <!-- Script untuk mengimpor library JSZip (digunakan untuk export Excel dan PDF) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <!-- Script untuk mengimpor library pdfMake (digunakan untuk export PDF) -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <!-- Script untuk mengimpor font untuk pdfMake -->
        <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
        <!-- Script untuk mengimpor library Buttons HTML5 DataTables (digunakan untuk export ke format file) -->
        <script
          type="text/javascript"
          charset="utf8"
          src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.colVis.min.js"
        ></script>

         <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <!-- <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script> -->
        <script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.1.2/js/dataTables.buttons.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.bootstrap5.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/3.1.2/js/buttons.print.min.js"></script>


        {{-- menu utama --}}

        <!-- Bootstrap CSS -->
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />

    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        rel="stylesheet"
    />

    <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
      </head>

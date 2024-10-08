<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Menu</div>
                <a class="nav-link" href="{{route('home')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <a class="nav-link" href="{{route('trolling')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-list-alt "></i></div>
                    Trolling
                </a>
                @if (Auth::check() && Auth::user()->is_admin == 1)
                <a class="nav-link" href="{{route('users.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-id-card"></i></div>
                    Managemen User
                </a>
                @endif
                <a class="nav-link" href="{{route('spreadsheets.updatepenghuni')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Update isi Penghuni
                </a>
                <a class="nav-link" href="{{route('spreadsheets.lokasi')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-male"></i></div>
                    Kamar WBP
                </a>
                <a class="nav-link" href="{{route('points.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa fa-file"></i></div>
                    Managemen Point
                </a>
                <a class="nav-link" href="{{route('apel')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-check-square"></i></div>
                    Apel Penghuni
                </a>
                @if (Auth::check() && Auth::user()->is_admin == 1)
                <a class="nav-link" href="{{route('pelanggarans.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa fa-tasks"></i></div>
                    Pelanggaran
                </a>
                <a class="nav-link" href="{{route('datawbps.index')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa fa-database"></i></div>
                    Database WBP
                </a>
                @endif

                <a class="nav-link" href="https://rmjpkl.github.io/astekpam2.github.io/">
                    <div class="sb-nav-link-icon"><i class="fas fa-check-square"></i></div>
                    Laporan Umum Ke Whatsapp
                </a>
            </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            {{Auth::user()->jabatan}}
        </div>
    </nav>
</div>
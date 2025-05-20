<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

        <a href="index.html" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <img src="{{ asset('front/img/logo1baleendah.jpg') }}" alt="Logo SMAN 1 Baleendah"
                style="max-height: 80px; width: auto;" class="img-fluid">
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="{{ url('/') }}" class="active">Beranda</a></li>
                <li><a href="{{ url('informasi') }}">Tentang Sekolah</a></li>
                <li><a href="{{ url('prestasi') }}">Prestasi</a></li>
                <li><a href="#karyawan-section">Karyawan</a></li>
                <ul>    
                    <li class="dropdown"><a href="#"><span>Siswa</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                      <ul>
                        <li><a href="{{url('eskul')}}">Ekstrakurikuler</a></li>
                      </ul>
                    </li>
                </ul>
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>
    </div>
</header>

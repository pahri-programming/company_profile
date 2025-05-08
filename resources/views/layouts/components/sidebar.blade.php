<nav class="pc-sidebar">
    <div class="navbar-wrapper">

        <div class="m-header">
            <!-- ========   Change your logo from here   ============ -->
            <img src="{{ asset('admin/images/logo-icon.svg') }}" alt="logo">
            <h3><b>Admin</b></h3>
        </div>
        <div class="navbar-content">
            <ul class="pc-navbar">
                <li class="pc-item">
                    <a href="../dashboard/index.html" class="pc-link">
                        <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                        <span class="pc-mtext">Dashboard</span>
                    </a>
                </li>

                <li class="pc-item pc-caption">
                    <label>Menu</label>
                    <i class="ti ti-dashboard"></i>
                </li>
                <li class="pc-item pc-hasmenu">
                    <a href="#!" class="pc-link"><span class="pc-micon"><i class="ti ti-menu"></i></span><span
                            class="pc-mtext">Menu
                        </span><span class="pc-arrow"><i data-feather="chevron-right"></i></span></a>
                    <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="{{ route('informasi.index') }}">Informasi</a>
                            </li>
                            <li class="pc-item"><a class="pc-link" href="{{ route('karyawan.index') }}">Karyawan</a>
                            </li>
                            <li class="pc-item"><a class="pc-link" href="{{ route('eskul.index') }}">Eskul</a></li>
                            <li class="pc-item"><a class="pc-link" href="{{ route('fasilitas.index') }}">Fasilitas</a>
                            </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

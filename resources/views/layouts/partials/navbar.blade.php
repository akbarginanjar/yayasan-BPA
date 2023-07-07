<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        {{-- <h1 class="logo me-auto"><a href="index.html">Mentor</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/" class="logo me-auto text-dark" style="font-size: 12px;"><img
                src="{{ asset('images/yayasan-bakti.png') }}" alt="" class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="{{ Request::is('/') ? 'text-warning' : '' }}" href="/">Home</a></li>
                <li><a class="{{ Request::is('tentang-kami') ? 'text-warning' : '' }}" href="/tentang-kami">Tentang
                        Kami</a></li>
                <li><a href="">Pendidikan</a></li>
                <li><a href="">Prestasi</a></li>
                <li><a href="">Blog</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <div class="dropdown">
            <button class="btn ms-3 dropdown-toggle text-white me-3" style="background: rgb(27, 27, 114);"
                type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Daftar Pendidikan
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="/pendaftaran-tk">Pendaftaran TK</a></li>
                <li><a class="dropdown-item" href="/pendaftaran-dta">Pendaftaran DTA</a></li>
            </ul>
        </div>
        {{-- <a href="" class="get-started-btn">Daftar Pendidikan</a> --}}

    </div>
</header><!-- End Header -->

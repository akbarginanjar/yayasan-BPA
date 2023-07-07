<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" style="background: rgb(0, 0, 44);" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon">
            {{-- <i class="fas fa-laugh-wink"></i> --}}
            <img src="{{ asset('images/icon.png') }}" class="" style="width: 50px;" alt="">
        </div>
        <div class="sidebar-brand-text mx-3" style="font-size: 25px;">YBPA</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Portal
    </div>

    <li
        class="nav-item {{ Request::is('admin/pendaftaran-tk') || Request::is('admin/pendaftaran-dta') ? 'active' : '' }}">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-fw fa-table"></i>
            <span>Pendaftar</span>
        </a>
        <div id="collapseTwo"
            class="collapse {{ Request::is('admin/pendaftaran-tk') || Request::is('admin/pendaftaran-dta') ? 'show' : '' }}"
            aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">List Pendaftaran :</h6>
                <a class="collapse-item {{ Request::is('admin/pendaftaran-tk') ? 'active' : '' }}"
                    href="/admin/pendaftaran-tk">Pendaftaran TK</a>
                <a class="collapse-item {{ Request::is('admin/pendaftaran-dta') ? 'active' : '' }}"
                    href="/admin/pendaftaran-dta">Pendaftaran DTA</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Charts -->
    <li class="nav-item {{ Request::is('informasi') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/informasi">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Informasi</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

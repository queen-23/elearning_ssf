<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion
" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">

        <div class="sidebar-brand-icon d-none">
            SSF
        </div>
        <style>
            .sidebar.toggled .sidebar-brand .sidebar-brand-icon {
                display: block !important;
            }
        </style>
        <div class="sidebar-brand-text mx-1">
            <img src="{{ url('/SSF%20E-Learning%20_%20Beranda_files/nyamping_new1.png') }}" alt="">
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->is('*dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('dashboard') }}">
            <i style="font-size: 1.5rem" class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    @if (Auth::user()->role == 'admin')
        @include('layouts.sidebarAdmin')
    @endif
    @if (Auth::user()->role == 'siswa')
        @include('layouts.sidebarSiswa')
    @endif
    @if (Auth::user()->role == 'user')
        @include('layouts.sidebarUser')
    @endif
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
<!-- End of Sidebar -->

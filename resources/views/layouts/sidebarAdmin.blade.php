<li class="nav-item {{ request()->is('*jadwal*') ? 'active' : '' }}">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
        aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Data Master</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header"> Data Master:</h6>
            <a class="collapse-item" href="{{ url('admin/kelas') }}">Kelas</a>
            <a class="collapse-item" href="{{ url('admin/akun') }}">Akun</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
        aria-expanded="true" aria-controls="collapseUtilities">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Kelola Homepage</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kelola Homepage:</h6>
            <a class="collapse-item" href="{{ url('/admin/beranda/kontak') }}">Kontak</a>
            <a class="collapse-item" href="{{ url('/admin/beranda/gallery') }}">Gallery</a>
        </div>
    </div>
</li>

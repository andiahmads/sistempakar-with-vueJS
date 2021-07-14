a<aside id="sidebar-wrapper">
    <div class="sidebar-brand">
        <a href="index.html">Admin Panel</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
    </div>
    <ul class="sidebar-menu">
        <li class="menu-header">System</li>
        <li><a class="nav-link" href="{{route('admin.dashboard')}}"><i class="fas fa-home"></i>
                <span>Dashboard</span></a>
        <li><a class="nav-link" href="{{route('admin.user.index')}}"><i class="fas fa-user-ninja"></i>
                <span>Pengguna</span></a>

        <li class="menu-header">Data Pengetahuan</li>
        <li><a class="nav-link" href="{{route('admin.gejala.index')}}"><i class="fas fa-user-injured"></i>
                <span>Gejala</span></a>
        <li><a class="nav-link" href="{{route('admin.rule-diagnosa.index')}}"><i class="fas fa-pallet"></i>
                <span>Rule-diagnosa</span></a>
        <li><a class="nav-link" href="{{route('admin.pertanyaan.index')}}"><i class="fas fa-question-circle"></i>
                <span>Pernyataan</span></a>
        <li><a class="nav-link" href="{{route('admin.saran.index')}}"><i class="fas fa-book-medical"></i>
                <span>Saran</span></a>


        <li class="menu-header">System</li>
        <li><a class="nav-link" href="{{route('admin.petunjuk-diagnosa.index')}}"><i
                    class="fas fa-info"></i> <span>Persetujuan Diagnosa</span></a>

        <li><a class="nav-link" href="{{route('admin.riwayat-diagnosa-user.index')}}"><i
                    class="fas fa-history"></i> <span>Riwayat Diagnosa</span></a>
        <li><a class="nav-link" href="{{route('admin.setting-profile')}}"><i class="fas fa-user-edit"></i> <span>Setting Profile</span></a>
        </li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
    </div>
</aside>

<nav class="navbar navbar-expand-lg main-navbar">

    <a href="{{route("user.dashboard")}}" class="navbar-brand sidebar-gone-hide">SISTEM PAKAR NPD</a>
    <div class="navbar-nav">
        <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
    </div>

    <div class="nav-collapse">
        <a class="sidebar-gone-show nav-collapse-toggle nav-link" href="#">
            <i class="fas fa-ellipsis-v"></i>
        </a>

        <ul class="navbar-nav">
            <li class="nav-item active"><a href="{{route('user.dashboard')}}" class="nav-link">Dashboard</a></li>
            <li class="nav-item"><a href="{{route('user.gejala')}}" class="nav-link">Gejala</a></li>
            <li class="nav-item"><a href="{{route('user.diagnosa')}}" class="nav-link">Mulai Diagnosa</a></li>
            <li class="nav-item"><a href="{{route('user.riwayat-diagnosa.index')}}" class="nav-link">Riwayat
                    Diagnosa</a></li>
        </ul>
    </div>
    <form class="form-inline ml-auto">
        <ul class="navbar-nav">
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">


        <li class="dropdown"><a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="{{asset('/storage/profile/'.Auth::user()->image)}}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, {{Auth::user()->name}}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a href="{{route('user.setting-profile.index')}}" class="dropdown-item has-icon">
                    <i class="far fa-user"></i> Profile
                </a>
                <a href="{{route('user.artikel')}}" class="dropdown-item has-icon">
                    <i class="fas fa-bolt"></i> Artikel
                </a>

                <div class="dropdown-divider"></div>
                <a href="{{route('logout')}}" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>

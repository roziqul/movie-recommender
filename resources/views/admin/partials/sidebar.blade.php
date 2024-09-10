<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <img src="{{asset('adminAssets/logo.png')}}" alt="" style="width: 100%;">
    </a>

    <hr class="sidebar-divider my-0">
    <li class="nav-item @if(request()->is('genres*')) active @endif" style="display: block">
        <a class="nav-link" href="{{route('genres.index')}}">
            <i class="fas fa-fw fa-server"></i>
            <span>Genre</span>
        </a>
    </li>
    <hr class="sidebar-divider">

    <hr class="sidebar-divider my-0">
    <li class="nav-item @if(request()->is('movies*')) active @endif">
        <a class="nav-link" href="{{route('movies.index')}}">
            <i class="fas fa-fw fa-film"></i>
            <span>Movie</span>
        </a>
    </li>
    <hr class="sidebar-divider">

    <hr class="sidebar-divider my-0">
        <li class="nav-item @if(request()->is('histories*')) active @endif">
            <a class="nav-link" href="{{route('histories.index')}}">
                <i class="fas fa-fw fa-book"></i>
                <span>History</span>
            </a>
        </li>
    <hr class="sidebar-divider">

    <hr class="sidebar-divider my-0">
        <li class="nav-item @if(request()->is('Homepage')) active @endif">
            <a class="nav-link" href="/">
                <i class="fas fa-fw fa-desktop"></i>
                <span>View Website</span>
            </a>
        </li>
    <hr class="sidebar-divider">

</ul>
<nav class="navbar navbar-expand navbar-light bg-gradient-dark topbar mb-4 static-top shadow">

    <form class="form-inline">
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>
    </form>

    <ul class="navbar-nav ml-auto">
        <div class="topbar-divider d-none d-sm-block"></div>
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                    {{auth()->user()->name}}
                </span>
                <img class="img-profile rounded-circle" src="{{asset('adminAssets/img/undraw_profile.svg')}}">
            </a>
        </li>
    </ul>

</nav>
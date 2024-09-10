<header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="/" class="logo">
        <img src="{{asset('mainAssets/images/logo.png')}}" alt="Filmlane logo" style="width: 250px">
      </a>

      <div class="header-actions">

        <button class="search-btn">
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <div class="lang-wrapper">
          <label for="language">
            <ion-icon name="globe-outline"></ion-icon>
          </label>

          <select name="language" id="language">
            <option value="en">EN</option>
            <option value="au">AU</option>
            <option value="ar">AR</option>
            <option value="tu">TU</option>
          </select>
        </div>

        @if (Auth::check() != null)
            <a class="btn btn-primary" href="{{route('logout.create')}}">Sign Out</a>
        @else
            <a class="btn btn-primary" href="{{route('login.create')}}">Sign in</a>
        @endif
        

      </div>

      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <a href="/" class="logo">
            <img src="{{asset('mainAssets/images/logo.svg')}}" alt="Filmlane logo">
          </a>

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="/" class="navbar-link">Home</a>
          </li>

          <li>
            <a href="{{ route('allMovie') }}" class="navbar-link">Movie</a>
          </li>

          <li>
            @if (!auth()->user())
            <a href="{{ route('login.create') }}" class="navbar-link">Recommendations</a>
            @elseif(auth()->user()->role == 'Admin')
            <a href="{{ route('genres.index') }}" class="navbar-link">Admin Dashboard</a>
            @elseif(auth()->user()->role == 'User')
            <a href="{{ route('recommendations.create') }}" class="navbar-link">Recommendations</a>
            @endif
          </li>

        </ul>

        <ul class="navbar-social-list">

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

    </div>
  </header>
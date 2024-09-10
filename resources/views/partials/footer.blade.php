<footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand-wrapper">

          <a href="./index.html" class="logo">
            <img src="{{asset('mainAssets/images/logo.png')}}" alt="Filmlane logo">
          </a>

          <ul class="footer-list">

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

        </div>

        <div class="divider"></div>

        <div class="quicklink-wrapper">

          <ul class="quicklink-list">

            <li>
              <a href="#" class="quicklink-link">Faq</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Help center</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Terms of use</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Privacy</a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2023 <a href="#">AIC3</a>. Movie Recommender V1
        </p>

        <img src="{{asset('mainAssets/images/footer-bottom-img.png')}}" alt="Online banking companies logo" class="footer-bottom-img">

      </div>
    </div>

  </footer>
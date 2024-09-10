@extends('master')
@section('content')
    <article>

      <section class="top-rated">
        <div class="container">

          <p class="section-subtitle">Online Streaming</p>

          <h2 class="h2 section-title">Top Rated Movies</h2>

          <ul class="movies-list">

            @foreach ($allMovies as $t)                
            <li>
              <div class="movie-card">

                <a href="{{ route('showMovie',$t->id) }}">
                  <figure class="card-banner">
                    <img src="{{$t->thumbnail}}" alt="Sonic the Hedgehog 2 movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="./movie-details.html">
                    <h3 class="card-title">{{$t->title}}</h3>
                  </a>

                  <time datetime="2022">{{$t->year}}</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">{{$t->quality}}</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT122M">{{$t->duration}}</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>{{$t->imdb_rating}}</data>
                  </div>
                </div>

              </div>
            </li>
            @endforeach

          </ul>

        </div>
      </section>

      <section class="cta">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="cta-title">Trial start first 30 days.</h2>

            <p class="cta-text">
              Enter your email to create or restart your membership.
            </p>
          </div>

          <form action="" class="cta-form">
            <input type="email" name="email" required placeholder="Enter your email" class="email-field">

            <button type="submit" class="cta-form-btn">Get started</button>
          </form>

        </div>
      </section>

    </article>
@endsection

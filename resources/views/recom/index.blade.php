@extends('master')
@section('content')
    <article>

      <section class="upcoming">
        <div class="container">

          <div class="flex-wrapper">

            <div class="title-wrapper">
              <p class="section-subtitle"></p>

              <h2 class="h2 section-title">Recommended Movie</h2>
            </div>

          </div>

          <ul class="movies-list">

            @foreach ($recommendation as $r)
            <li>
              <div class="movie-card">

                <a href="{{ route('recommendations.show',$r->id) }}">
                  <figure class="card-banner">
                    <img src="{{$r->thumbnail}}" alt="The Northman movie poster">
                  </figure>
                </a>

                <div class="title-wrapper">
                  <a href="{{ route('recommendations.show',$r->id) }}">
                    <h3 class="card-title">{{$r->title}}</h3>
                  </a>

                  <time datetime="2022">{{$r->year}}</time>
                </div>

                <div class="card-meta">
                  <div class="badge badge-outline">{{$r->quality}}</div>
                  <div class="badge badge-outline">{{$r->genre->name}}</div>

                  <div class="duration">
                    <ion-icon name="time-outline"></ion-icon>

                    <time datetime="PT137M">{{$r->duration}}</time>
                  </div>

                  <div class="rating">
                    <ion-icon name="star"></ion-icon>

                    <data>{{$r->imdb_rating}}</data>
                  </div>
                </div>

              </div>
            </li>
            @endforeach

          </ul>

        </div>
      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="service">
        <div class="container">

          <div class="service-banner">
            <figure>
              <img src="{{asset('mainAssets/images/service-banner.jpg')}}" alt="HD 4k resolution! only $3.99">
            </figure>

            <a href="{{asset('mainAssets/images/service-banner.jpg')}}" download class="service-btn">
              <span>Download</span>

              <ion-icon name="download-outline"></ion-icon>
            </a>
          </div>

          <div class="service-content">

            <p class="service-subtitle">Our Services</p>

            <h2 class="h2 service-title">Download Your Shows Watch Offline.</h2>

            <p class="service-text">
              Lorem ipsum dolor sit amet, consecetur adipiscing elseddo eiusmod tempor.There are many variations of
              passages of lorem
              Ipsum available, but the majority have suffered alteration in some injected humour.
            </p>

            <ul class="service-list">

              <li>
                <div class="service-card">

                  <div class="card-icon">
                    <ion-icon name="tv"></ion-icon>
                  </div>

                  <div class="card-content">
                    <h3 class="h3 card-title">Enjoy on Your TV.</h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                    </p>
                  </div>

                </div>
              </li>

              <li>
                <div class="service-card">

                  <div class="card-icon">
                    <ion-icon name="videocam"></ion-icon>
                  </div>

                  <div class="card-content">
                    <h3 class="h3 card-title">Watch Everywhere.</h3>

                    <p class="card-text">
                      Lorem ipsum dolor sit amet, consecetur adipiscing elit, sed do eiusmod tempor.
                    </p>
                  </div>

                </div>
              </li>

            </ul>

          </div>

        </div>
      </section>

    </article>
@endsection

@extends('master')
@section('content')
<article>
    @foreach ($movie as $m)        
    <section class="movie-detail">
      <div class="container">

        <figure class="movie-detail-banner">

          <img src="{{$m->thumbnail}}" alt="Free guy movie poster">

          <button class="play-btn">
            <ion-icon name="play-circle-outline"></ion-icon>
          </button>

        </figure>

        <div class="movie-detail-content">
          @if ($m->subtitle)
          <p class="detail-subtitle">{{$m->subtitle}}</p>
          @endif

          <h1 class="h1 detail-title">{{$m->title}}</h1>

          <div class="meta-wrapper">

            <div class="badge-wrapper">
              <div class="badge badge-outline">{{$m->quality}}</div>
            </div>

            <div class="ganre-wrapper">
                <a href="#">{{$m->genre->name}}</a>
              </div>

            <div class="date-time">

              <div>
                <ion-icon name="calendar-outline"></ion-icon>

                <time datetime="2021">{{$m->year}}</time>
              </div>

              <div>
                <ion-icon name="time-outline"></ion-icon>

                <time datetime="PT115M">{{$m->duration}} Minutes</time>
              </div>

            </div>

          </div>

          <p class="storyline">
            {{$m->synopsis}}
          </p>

          <div class="details-actions">

            <button class="share">
              <ion-icon name="share-social"></ion-icon>

              <span>Share</span>
            </button>

            <div class="title-wrapper">
              <p class="title">YouTube</p>

              <p class="text">Streaming Channels</p>
            </div>

            <form action="{{route('history.store')}}" method="POST" onsubmit="window.open('{{ $m->link }}')">
              @csrf
              <input type="text" name="user_id" value="{{auth()->user()->id}}" style="display:none">
              <input type="text" name="movie_id" value="{{$m->id}}" style="display:none">
              <button type="submit" class="btn btn-primary">
                <ion-icon name="play"></ion-icon>
                <span>Watch Now</span>
              </button>
            </form>
            

          </div>

          <a href="./assets/images/movie-4.png" download class="download-btn">
            <span>Download</span>

            <ion-icon name="download-outline"></ion-icon>
          </a>

        </div>

      </div>
    </section>
    @endforeach
  </article>
@endsection

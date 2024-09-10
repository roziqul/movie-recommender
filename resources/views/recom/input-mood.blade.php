<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AIC3 - Movie Recommender</title>
  <link rel="shortcut icon" href="{{asset('mainAsset/favicon.svg')}}" type="image/svg+xml">
  <link rel="stylesheet" href="{{asset('mainAssets/css/style.css')}}">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body id="top">

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="{{asset('mainAssets/images/logo.svg')}}" alt="Filmlane logo">
      </a>

    </div>
  </header>

  <main>
    <article>

      <section class="hero">
        <div class="container" style="display: flex; align-items: center; justify-content: center">

        <form action="{{ route('recommendations.create') }}" method="get" class="form-login recom">
            {{-- <h3>Movie Recommender</h3>
            <h6>please complete following tasks in order to start recommendation</h6> --}}

            <h3>How's your mood?</h3>

            <div style="display: flex; justify-content: space-around; margin-top: 50px">
              <button style="margin-right: 50px">
                <img src="{{ asset('mainAssets/images/inputs/happy.png') }}" style="height: 200px">
                Happy
              </button>
              <button style="margin-right: 50px">
                <img src="{{ asset('mainAssets/images/inputs/smart.png') }}" style="height: 200px">
                Smort
              </button>
              <button style="margin-right: 50px">
                <img src="{{ asset('mainAssets/images/inputs/cool.png') }}" style="height: 200px">
                Cool
              </button>
              <button style="margin-right: 50px">
                <img src="{{ asset('mainAssets/images/inputs/brainlet.png') }}" style="height: 200px">
                Koplo
              </button>
              <button>
                <img src="{{ asset('mainAssets/images/inputs/sad.png') }}" style="height: 200px">
                Sad
              </button>
            </div>
            <button class="login-button" type="submit">Skip</button>
        </form>

        </div>
      </section>
    </article>
  </main>

  <script src="{{asset('mainAssets/js/script.js')}}"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>

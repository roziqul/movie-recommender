<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AIC3 - Movie Recommender</title>
  <link rel="shortcut icon" href="{{asset('mainAssets/favicon.svg')}}" type="image/svg+xml">
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
        <img src="{{asset('mainAssets/images/logo.png')}}" alt="Filmlane logo" style="width: 250px">
      </a>

    </div>
  </header>

  <main>
    <article>

      <section class="hero">
        <div class="container" style="display: flex; align-items: center; justify-content: center">

        <form action="{{ route('recommendations.store') }}" method="post" class="form-login recom" style="margin-top:250px;">
            @csrf
            <h3>How's your day?</h3>
            <div style="display: flex; justify-content: space-around; margin-top: 20px">
                <label>
                    <input type="radio" name="condition" value="OK" style="display:none">
                    <img src="{{ asset('mainAssets/images/inputs/thumb.jpg') }}" style="height: 150px; border-radius:30px">
                    <a style="text-align:center; margin-top:5px">OK</a>
                </label>
                <label>
                    <input type="radio" name="condition" value="Tired" style="display:none">
                    <img src="{{ asset('mainAssets/images/inputs/tired.jpg') }}" style="height: 150px; border-radius:30px">
                    <a style="text-align:center; margin-top:5px">Tiring</a>
                </label>
            </div>

            <h3 style="margin-top:50px">How's your mood?</h3>

            <div style="display: flex; justify-content: space-around; margin-top: 20px">
                <label>
                    <input type="radio" name="feeling" value="Joy" style="display:none">
                    <img src="{{ asset('mainAssets/images/inputs/joy.jpg') }}" style="height: 100px; border-radius:100%">
                    <a style="text-align:center">Joy</a>
                </label>
                <label>
                    <input type="radio" name="feeling" value="Sadness" style="display:none">
                    <img src="{{ asset('mainAssets/images/inputs/sad.jpeg') }}" style="height: 100px; border-radius:100%">
                    <a style="text-align:center">Sad</a>
                </label>
                <label>
                    <input type="radio" name="feeling" value="Fear" style="display:none">
                    <img src="{{ asset('mainAssets/images/inputs/fear.jpg') }}" style="height: 100px; border-radius:100%">
                    <a style="text-align:center">Fear</a>
                </label>
                <label>
                    <input type="radio" name="feeling" value="Disgust" style="display:none">
                    <img src="{{ asset('mainAssets/images/inputs/disgust.jpg') }}" style="height: 100px; border-radius:100%">
                    <a style="text-align:center">Disgust</a>
                </label>
                <label>
                    <input type="radio" name="feeling" value="Anger" style="display:none">
                    <img src="{{ asset('mainAssets/images/inputs/angry.jpg') }}" style="height: 100px; border-radius:100%">
                    <a style="text-align:center">Anger</a>
                </label>
            </div>

            {{-- <h3 style="margin-top:50px">What is your preferences?</h3>

            <div style="display: flex; justify-content: space-around; margin-top: 20px">
                <label>
                    <input type="radio" name="preference" value="New" style="display:none">
                    <img src="{{ asset('mainAssets/images/inputs/angry.jpg') }}" style="height: 100px; border-radius:100%">
                    <a style="text-align:center">Fresh</a>
                </label>
                <label>
                    <input type="radio" name="preference" value="Old" style="display:none">
                    <img src="{{ asset('mainAssets/images/inputs/angry.jpg') }}" style="height: 100px; border-radius:100%">
                    <a style="text-align:center">Old</a>
                </label>
            </div> --}}
            <button class="login-button" type="preference">Start Recommendation</button>
            <a style="text-align:right; margin-top:20px" href="{{route('Homepage')}}">Skip Recommendation >></a>
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

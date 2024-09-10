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

      <section class="hero register">
        <div class="container" style="display: flex; align-items: center; justify-content: center">

        <form action="{{ route('register.store') }}" method="post" class="form-login register">
          @csrf
            <h3>Register</h3>
            <label class="login-label" for="country">Region</label>
            <select class="login-input" name="country">
              <option value="1">Indonesia</option>
              <option value="2">USA</option>
            </select>
    
            <label class="login-label" for="name">Name</label>
            <input class="login-input" type="text" placeholder="Name" name="name">
    
            <label class="login-label" for="email">Email</label>
            <input class="login-input" type="text" placeholder="Email" name="email">
    
            <label class="login-label" for="password">Password</label>
            <input class="login-input" type="password" placeholder="Password" name="password">
    
            <label class="login-label" for="password">Password Confirmation</label>
            <input class="login-input" type="password" placeholder="Password" name="password_confirmation">
    
            <button class="login-button" type="submit">Register</button>
            <div style="text-align: center; margin-top: 10px">
              Or
              <a href="/login" style="color: yellow; text-decoration: underline">Log In</a>
            </div>
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

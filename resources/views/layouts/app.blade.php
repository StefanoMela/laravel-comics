<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  {{-- FONTS --}}
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <title>@yield('page-title')</title>

  @vite('resources/js/app.js')
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link {{Route::currentRouteName() == 'home' ? 'active' : ''}}"
              href="{{ route('home') }}">Home</a>
            <a class="nav-link {{Route::currentRouteName() == 'comics' ? 'active' : ''}}"
              href="{{route('comics')}}">Comics</a>
            <a class="nav-link {{Route::currentRouteName() == 'contacts' ? 'active' : ''}}"
              href="{{route('contacts')}}">Contacts</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>@yield('main-content')</main>
  <footer>footer</footer>
</body>

</html>
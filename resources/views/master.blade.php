<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') / Lara Blog</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <script src="//unpkg.com/alpinejs" defer></script>  
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
   <header>
    @if(session()->has('message'))
      <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" class="flash-message">
        <p>
          {{ session('message') }}
        </p>
      </div>
    @endif
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light col-12 justify-content-end">
            <ul class="nav ml-auto d-flex align-items-center">
                @auth
                    <li class="nav-item">
                        <span class="navbar-text text-primary">
                        Vítej {{auth()->user()->name}}
                        </span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/create"><i class="bi bi-file-post-fill text-primary me-1"></i>
                            Přidej příspěvek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">
                            <i class="bi bi-house text-primary me-1"></i>Domů</a>
                    </li>
                    <li class="nav-item">
                    <form class="logout ml-auto" style="padding-right: 10px;" method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">
                        Odhlášení
                        </button>
                    </form>
                    </li>
                @else
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="/">
                        <i class="bi bi-house-door"></i>Domů</i></a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="/login">
                        Přihlášení<i class="bi bi-door-open"></i></a>
                </li>
                <li class="nav-item d-flex align-items-center">
                    <a class="nav-link" href="/register">
                        Registrace
                    <i class="bi bi-box-arrow-in-right"></i></a>
                </li>
                @endauth
            </ul>
        </nav>
    </div>
   </header>
   <main>
        <div class="container">
            @yield('content')
        </div>
   </main>
</body>
</html>

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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
</head>
<body>
   <header>
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light col-12 justify-content-end">
            <ul class="nav ml-auto">
                @auth
                <li class="nav-item ml-auto">
                    <span class="">
                      Vítej {{auth()->user()->name}}
                    </span>
                </li>
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="/create">
                        Přidej příspěvek</a>
                </li>
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="/">
                        Domů</a>
                </li>
                <li class="nav-item ml-auto">
                  <form class="logout" method="POST" action="/logout">
                    @csrf
                    <button type="submit" class="btn btn-primary">
                     Odhlášení
                    </button>
                  </form>
                @else
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="/">
                        Domů</a>
                </li>
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="/login">
                        Přihlášení
                    </a>
                </li>
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="/register">
                        Registrace
                    </a>
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
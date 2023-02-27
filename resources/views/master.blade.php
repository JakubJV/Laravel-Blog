<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') / Lara Blog</title>

    <!-- Scripts -->
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
    <div class="d-flex align-items-end">
        <nav class="navbar navbar-expand-sm bg-light">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">
                        Domů</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">
                        Přihlášení
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/register">
                        Registrace
                    </a>
                </li>
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
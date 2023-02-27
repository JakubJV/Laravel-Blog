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
        <nav>
            <ul>
                <li><a href="/">Domů</a></li>
                <li><a href="/login">Přihlášení</a></li>
                <li><a href="/register">Registrace</a></li>
            </ul>
        </nav>
   </header>
   <main>
        <div class="container">
            @yield('content')
        </div>
   </main>
</body>
</html>
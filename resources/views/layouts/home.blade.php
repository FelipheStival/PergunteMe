<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/all.css') }}">

</head>

<body>
    <div class="side-bar">
        <div class="center-side-bar">
            <div class="center-side-bar-leaft">
                <img src="{{ asset('img/question.png') }}" alt="" id="logo-side-bar">
                <div class="search-box">
                    <input type="text" class="search-input" placeholder="Pesquisar">
                    <button class="search-button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
            <div class="center-side-bar-leaft">
                <button type="button" class="btn-pergunta">criar pergunta</button>
                <div class="icon-menu-side-bar">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="icon-menu-side-bar">
                    <i class="fas fa-comments"></i>
                </div>
                <div class="container-user-info">
                    <img src="{{ asset('img/user.png') }}" alt="" id="user-profile-image">
                    <h7>{{ $nome }}<h7>
                </div>
            </div>
        </div>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</body>

</html>
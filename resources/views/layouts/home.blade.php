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
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">

</head>
<body>
    <div class = "home-sider-bar">
        <div class = "center-home-sider-bar">
            <div class = "container-search-logo">
                <img src= "{{ asset('img/question.png') }}">
                <div id = "container-side-bar">

                </div>
            </div>
            <div class = "container-options-menu">
                <button id = "btn-perguntar">Pergunta</button>
                <div class="icon-menu">
                    <i class="fa fa-bell" aria-hidden="true"></i>
                    <span class="badge">3</span>
                </div>
                <div class="icon-menu">
                    <i class="fa fa-comments" aria-hidden="true"></i>
                    <span class="badge">3</span>
                </div>
                <div id = "imagem-usuario">
                    <img src=" {{ asset('img/user.png') }} " alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
    <main class="py-4">
        @yield('content')
    </main>
</body>
<script src="{{ asset('js/home.js') }}"></script>
</html>

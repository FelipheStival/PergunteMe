<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Question</title>

        <!-- Styles -->
        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
        <link href="{{ asset('css/all.css') }}" rel="stylesheet">
        <link href="{{ asset('css/perfil.css') }}" rel="stylesheet">
        <link href="{{ asset('css/editar-perfil.css') }}" rel="stylesheet">
        <link href="{{ asset('css/perguntar.css') }}" rel="stylesheet">
        <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    </head>
    <body>
            <div class = "index-container">
                <div class = "center-index-container">
                    <div class = "index-center-container-left">
                        <img src= "{{ route('imagem','question.png') }}">
                        <h1>O Question ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h1>
                    </div>
                    <div class = "index-center-container-right">
                        <form method="POST" action="{{ route('login') }}"  id = "logar-index-page">
                            @csrf
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Senha">
                            <button id = "btn-logar-index" type="submit">Logar</button>
                            <div class = "separador"></div>
                            <a href="{{ route('register') }}">Não possui conta? Crie agora...</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class = "index-container-footer">
                <div class = "center-container-footer">
                    <img src= "{{ route('imagem','github.png') }}">
                    <p>&copy; Criado por Feliphe Stival</p>
                </div>
            </div>
    </body>
</html>

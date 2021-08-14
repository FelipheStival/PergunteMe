@extends('layouts.home')

@section('content')

<div class = "container-perfil">
    <div class = "container-perfil-header">
        <div class = "container-perfil-profile-info">
            <div class = "container-perfil-usuario-image">
                <img src=" {{ asset('img/user.png') }} " alt="" srcset="">
            </div>
            <h7>{{ $nome }}</h7>
            <i class="fas fa-user-edit"></i>
        </div>
        <div class = "container-profile-info">
            <button id = "btn-tabs-left">Perguntas</button>
            <button id = "btn-tabs-right">Respostas</button>
        </div>
        <div class = "container-tabs-content">

        </div>
        <div id = "container-respostas-perguntas">

        </div>
    </div>
</div>

<script src="{{ asset('js/perfil.js') }}"></script>

@endsection
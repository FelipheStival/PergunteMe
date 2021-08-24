@extends('layouts.home')

@section('content')

<div class = "container-home">
    <div id = "menu-perfil-home">
        <div id = "container-photo-menu-perfil">
            <img src=" {{ route('imagem', $image_profile) }} " alt="Imagem usuário">
        </div>
        <div id = "container-menu-item-perfil-home">
            <div class = "menu-item-perfil-home">
                <a href=" {{ route('show', $id) }} ">Perfil</a>
                <i class="fa fa-user-circle" aria-hidden="true"></i>
            </div>
            <div class = "menu-item-perfil-home">
                <h7>Notificações</h7>
                <i class="fa fa-question" aria-hidden="true"></i>
            </div>
            <div class = "menu-item-perfil-home">
                <a href=" {{ route('sair') }} ">Sair</a>
                <i class="fa fa-reply" aria-hidden="true"></i>
            </div>
        </div>
    </div>
    <div id = "container-perguntas-home">
        
    </div>
    
</div>

@endsection
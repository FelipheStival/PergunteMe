@extends('layouts.home')

@section('content')

<div class = "container-home">
    <div id = "menu-perfil-home">
        <div id = "container-photo-menu-perfil">
            <figure>
                <img src=" {{ route('imagem', $image_profile) }} " alt="Imagem usuário">
            </figure>
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
        <div class="container-selecionar-pergunta" id="container-editar-perfil-tabs">
            <button class="btn-selecionar-categoria-pergunta active" id="btn-selecionar-paquera">paquera</button>
            <button class="btn-selecionar-categoria-pergunta" id="btn-selecionar-encontros">encontros</button>
            <button class="btn-selecionar-categoria-pergunta" id="btn-selecionar-relacionamentos">relacionamento</button>
            <button class="btn-selecionar-categoria-pergunta" id="btn-selecionar-sexualidade">sexualidade</button>
            <button class="btn-selecionar-categoria-pergunta" id="btn-selecionar-comportamento">comportamento</button>
            <button class="btn-selecionar-categoria-pergunta" id="btn-selecionar-estilo">estilo</button>
            <button class="btn-selecionar-categoria-pergunta" id="btn-selecionar-outros">outros</button>
        </div>
        <div id = "container-lista-perguntas">
            
        </div>
    </div>
    
</div>

@endsection
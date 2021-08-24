@extends('layouts.home')

@section('content')

<div class="container-editar-perfil">
    <h1>Configurar</h1>
    <div class="container-editar-perfil-tabs" id="container-editar-perfil-tabs">
        <button class="btn-editar-pefil" id="btn-editar-pefil">Perfil</button>
        <button class="btn-editar-pefil" id="btn-editar-foto">Foto</button>
        <button class="btn-editar-pefil" id="btn-editar-imagem-capa">Imagem capa</button>
        <button class="btn-editar-pefil" id="btn-editar-senha">Senha</button>
    </div>
    <div id="tab-editar-perfil">
        <form method="POST" action="{{ route('update-nome', $id) }}">
            @method('PUT')
            @csrf
            <label for="name"><strong>Usuário: </strong></label>
            <input type="text" name="name" value="{{ $name }}" id="nomeUsuarioInput">
            <button type="submit" id="btn-atualizar-perfil">Salvar</button><br><br>
        </form>
    </div>
    <div id="tabs-editar-foto">
        <form method="PUT" action="#">
            <img src="{{ route('imagem', $image_profile) }}" alt="Usuario foto" srcset="">
            <div id="container-btn-upload-imagem">
                <input type="file" name="file" id="fotoUsuarioInput">
                <button id="btn-enviar-foto-input" type="submit">Atualizar foto</button>
            </div>
        </form>
    </div>
    <div id="tabs-editar-capa">
        
    </div>
    <div id="tabs-editar-senha">

    </div>
    @if (Session::has('mensagem'))
    <div id = "container-alertar-perfil">
        <x-alerta :mensagem= "Sucesso" />
    </div>
    @endif
</div>

@endsection
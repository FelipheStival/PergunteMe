@extends('layouts.home')

@section('content')

<div class = "container-editar-perfil">
    <h1>Configurar</h1>
    <div class = "container-editar-perfil-tabs" id = "container-editar-perfil-tabs">
        <button class = "btn-editar-pefil" id = "btn-editar-pefil">Perfil</button>
        <button class = "btn-editar-pefil" id = "btn-editar-foto">Foto</button>
        <button class = "btn-editar-pefil" id = "btn-editar-imagem-capa">Imagem capa</button>
        <button class = "btn-editar-pefil" id = "btn-editar-senha">Senha</button>
    </div>
    <div id = "tab-editar-perfil">
        <form action="{{ route('atualizar',$id) }}" method="POST">
            @method('PUT')
            @csrf
            <label for="fname"><strong>Usuário: </strong></label>
            <input type="text" name="name" value="{{ $name }}" id = "nomeUsuarioInput">
            <button type="submit" id = "btn-atualizar-perfil">Salvar</button>
            @if(!empty($mensagem))
                <span><strong>{{ $mensagem }}</strong></span>
            @endif
        </form>
    </div>
    <div id = "tabs-editar-foto">
        <form id = "formulario-atualizar-foto" action="{{ route('atualizar-imagem',$id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <img src="{{ route('imagem', $image_profile) }}" alt="Usuario foto" srcset="">
            <div id = "container-btn-upload-imagem">
                 <input type="file" name="profile_image">
                <button>Atualizar foto</button>
            </div>
        </form>
    </div>
    <div id = "tabs-editar-capa">
        <form>
            
        </form>
    </div>
    <div id = "tabs-editar-senha">
        <form>
            
        </form>
    </div>
</div>

@endsection
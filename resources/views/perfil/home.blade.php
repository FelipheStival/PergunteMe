@extends('layouts.home')

@section('content')

<div class="container-perfil">
    <div class="container-perfil-header">
        <div class="container-perfil-profile-info">
            <div class="container-perfil-usuario-image">
                <img src=" {{ route('imagem', $image_profile) }} " alt="Imagem usuário">
            </div>
            <h7>{{ $name }}</h7>
            @if( $id == Auth::user()->id )
            <a href="{{ route('editar',$id) }}">
                <i class="fas fa-user-edit" id="btn-editar"></i>
            </a>
            @endif
        </div>
        <div class="container-profile-info">
            <button id="btn-tabs-left">Perguntas</button>
            <button id="btn-tabs-right">Respostas</button>
        </div>
        <div id ="container-respostas-perfil">
            
        </div>
        <div id ="container-perguntas-perfil">

        </div>
    </div>
</div>

@endsection
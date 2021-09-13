@extends('layouts.home')

@section('content')

<div id = "container-perguntar">
    <form id  = "formulario-criar-pergunta" method="POST" action="{{ route('perguntar') }}">
        @csrf
        <label for="nome-pergunta"><strong>Nome da pergunta: </strong></label>
        <input type="text" id="nome-pergunta" name="nomePergunta" class = "input-criar-perguntar">
        <label for="conteudo-pergunta"><strong>Conteúdo da pergunta:</strong></label>
        <textarea id="conteudo-pergunta" name="conteudoPergunta" rows="5" cols="33" class = "input-criar-perguntar"></textarea>
        <label for="categoria-perguntas"><strong>Categoria da perguntas: </strong></label>
        <select name="categoriaPergunta" id="categoria-perguntas" class = "input-criar-perguntar">
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria->id }}">{{ $categoria->nome  }}</option>
        @endforeach
        </select>
        <button type="submit">Enviar pergunta</button>
        @if($errors->any())
            @component('components.alertaError')
                {{ $errors->first() }}
            @endcomponent
        @endif
        @if (Session::has('mensagem'))
            @component('components.alertaSucesso')
                Pergunta cadastrada com sucesso
            @endcomponent
        @endif
    </form>
</div>

@endsection
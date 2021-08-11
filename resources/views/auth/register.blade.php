@extends('layouts.app')

@section('content')
<div class = "content-login">
    <div class = "content-center-register">
        <div class = "content-header-login">
            <div class = "center-image">
                <img src="{{ asset('img/logo.png') }}" alt="" >
            </div>   
        </div>
        <div class = "cotent-input-login">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class = "input-login">
                    <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Usuário">
                </div>
                <div class = "input-login">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                </div>
                <div class = "input-login">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Senha">
                </div>
                <div class = "content-login-register">
                    <button>Logar</button>
                </div>
            </form>
        </div>
        <div class = "error-login">
            @error('email')
                <strong>{{ $message }}</strong>
            @enderror
            @error('password')
                <strong>{{ $message }}</strong>
            @enderror
            @error('name')
                <strong>{{ $message }}</strong>
            @enderror
        </div>
    </div>
</div>
@endsection

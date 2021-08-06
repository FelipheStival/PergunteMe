@extends('layouts.app')

@section('content')

<div class = "content-login">
    <div class = "content-center-login">
        <div class = "content-header-login">
            <div class = "center-image">
                <img src="{{ asset('img/logo.png') }}" alt="" >
            </div>   
        </div>
        <div class = "cotent-input-login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class = "input-login">
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                </div>
                <div class = "input-login">
                    <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Senha">
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
        </div>
    </div>
</div>

@endsection

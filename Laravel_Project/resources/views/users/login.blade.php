@extends('layouts.main')

@section('title', 'Login')

@section('body', 'login')

@section('content')

<div id='login' class="col-md-6 offset-md-3">
    <div id="contentLogin">
    <h1>Login</h1>
    <br>
    <input id='login-input' type="text" placeholder="Digite seu usuário">
    <br><br>
    <input id='login-input' type="password" placeholder="Digite sua senha">
    <br><br>
    <button id='login-button'>Enviar</button>
    <a href="/auth/redirect" id="login-input">Google</a>
    </div>
</div>

@endsection
@extends('layouts.main')

@section('title', 'Informações')

@section('body', 'info-page')

@section('content')

    <h1>Informações Gerais do PHP</h1>
    <?php 
        phpinfo();
    ?>

@endsection
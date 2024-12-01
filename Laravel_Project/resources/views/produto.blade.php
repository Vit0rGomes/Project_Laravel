@extends('layouts.main')

@section('title', '{$id}')

@section('body', 'product-id-page')

@section('content')

@if($id == null)

<p>Nenhum produto no estoque!</p>

@else

<p>Exibindo produto id {{$id}}</p>

@endif

@endsection
@extends('layouts.main')

@section('title', 'Criar Evento')

@section('body', 'criar-evento') <!-- classe do body -->

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" id="date" name="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" id="image" name="image" placeholder="Anexar" class="form-control-file">
        </div>
        <div class="form-group">
            <label for="title">Nome do Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Nome da cidade">
        </div>
        <div class="form-group">
            <label for="private">Evento privado:</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="private" id="private" value="1">
                    Sim
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="private" id="private" value="0">
                    Não
            </div>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descreva o que vai acontecer no evento"></textarea>
        </div>
        <div class="form-group">
            <label for="items">Adicione items de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cofee Break"> Cofee Break
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Food"> Open Food
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
        </div>
        <input type="submit" class="btn btn-primary" value="Criar Evento">
    </form>
</div>




@endsection
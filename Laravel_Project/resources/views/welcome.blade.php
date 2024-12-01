@extends('layouts.main')

@section('title', 'Teste')

@section('body', 'initial-page')

@section('content')

    <div id="search-container" class="col-md-12">
        <form action="/" method="GET">
            <label for="search"> <h1>Busque um evento</h1> </label>
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>

    @if($search)

         <div id="events-container" class="col-md-12">
            <h2>Buscando por: {{ $search }}</h2>
            <p class="subtitle">Veja os eventos relacioniados com a sua pesquisa</p>
            <div id="cards-container" class="row">

    @else

        <div id="events-container" class="col-md-12">
            <h2>Próximos eventos</h2>
            <p class="subtitle">Veja os eventos dos próximos dias</p>
            <div id="cards-container" class="row">

    @endif

            @foreach($events as $event)
                <div class="card col-md-3">
                    <img src="/img/events/{{ $event->image }} " alt="{{ $event->title }}">
                    <div class="card-body">
                        <p class="card-date">{{ date('d/m/Y', strtotime($event->date)) }}</p>
                        <h5 class="card-title">{{ $event->title }}</h5>
                        <p class="card-participants">X Participantes</p>
                        <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber Mais</a>
                    </div>
                </div>
            @endforeach
            @if(count($events) == 0 && $search)
            <p>Não foi possível encontrar um evento sobre <b>{{$search}}.</b> <a href="/">Ver todos</a></p>
            @elseif(count($events) == 0)
                <p>Não há eventos Disponíveis</p>
            @endif  
        </div>
    </div>

@endsection

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    /* Principal */
    public function index() {

        $search = request('search');

        if($search){

            $events = Event::where([
                ['title', 'LIKE', '%' . $search . '%']
            ])->get();

        }else{

            $events = Event::all();

        }
        
        return view('welcome', ['events' => $events, 'search' => $search]);

    }

    /* Criar um evento */
    public function create() {
        return view('events.create');
    }

    /* store */
    public function store(Request $request) {  // Recebe o request que veio do submit da aplicação

        $event = new Event; // Cria novo obj

        $event->date = $request->date; // Atribuindo valor a 'date'
        $event->title = $request->title; // Atribuindo valor no 'title'
        $event->city = $request->city; // Atribuindo valor em 'city'
        $event->private = $request->private; // Atribuindo valor para 'private'
        $event->description = $request->description; // Atribuindo valor para 'description'

        //Formulário envia uma string, porém é um array então indicamos isso para o Model
        $event->items = $request->items;  

        // Image Upload
        if( $request->hasFile('image') && $request->file('image')->isValid()){

            // Cria uma variável para o request da imagem
            $requestImage = $request->image;

            // Guarda a extensão
            $extension = $requestImage->extension();

            // Altera o nome da imagem para um nome único
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . '.' . $extension;

            // Coloca na pasta img/events
            $requestImage->move(public_path('img/events'), $imageName);

            // Guarda o nome da imagem no banco de dados
            $event->image = $imageName;

        }

        $event->save(); // Salva tudo no Banco

        //Redireciona para a pagina principal e envia uma msg de sucesso
        return redirect('/')->with('msg','Evento criado com sucesso!');
        
    }

    /* View de cada evento */
    public function show($id) {

        $event = Event::findOrFail($id); // Procura um registro na tabela com base nesse $id

        // Retorna a view do evento com determinado $id
        return view('events.show', ['event' => $event]);
        
    }
}



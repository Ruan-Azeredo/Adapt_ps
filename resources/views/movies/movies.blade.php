@extends('movies.main')

@section('title', 'Filme | Adapti PS')

@section('content')

<div class='container'>

    <header class='header initial'>
        {{-- <form action="{{ route("movies.index") }}" method="get" class='search'>
            @csrf
            <input type="text" name="search" required placeholder="Search" class='search-text'/>
            <button type="submit" class='search-button'>&#8981;</button>
        </form> --}}
    </header>

    <aside class='aside'>
        <a href="{{ route('movies.index') }}"><button class='button-aside home'>HOME</button></a>
        <a href="{{ route('movies.create') }}"><button class='button-aside create'>CREATE</button></a> {{--Botão para ir para o ambiente de criação de um novo filme--}}
        <input type='checkbox' id='checkbox'>
        <label for='checkbox'>
            <button class='button-aside search2'>SEARCH</button>
        </label>
        <form action="{{ route("movies.index") }}" method="get" class='search'>
            @csrf
            <input type="text" name="search" required placeholder="Search" class='search-text'/>
            <button type="submit" class='search-button'>&#8981;</button>
        </form>
        
    
    </aside>

    <main class='main'>
        @foreach ($movies as $movie)
                <div class='container-movies'>
                    <img src="{{ url("/storage/{$movie->image}") }}" alt="{{ $movie->title }}" class='image'>
                    <h4 class='title'>{{ $movie->title }}</h4>                    
                    <div class='infos'>
                        <div class='especify pais'>País: {{ $movie->country->name }}</div>
                        <div class='especify data'>Data de Lançamento: {{ $movie->release }}</div>
                        <div class='especify sinopse'>Sinopse: {{ $movie->name }} </div>
                        <div class='edit-e-delete'>
                            <a href="{{ route('movies.edit',$movie->id) }}" class='especify edit-button button'><button>Edit</button></a>
                            <form id="form-delete" action="{{ route('movies.destroy',$movie->id) }}" method="POST"> {{--Botão de delete de um filme--}}
                                @csrf {{--Filtro de proteção que deve ter em todos os blades--}}
                                @method('delete') {{--Forma de adicionar DELETE ou PUT ou PATCH--}}
                                <a type="submit" class='especify delete button'><button>Delete</button></a>
                            </form>
                        </div>
                    </div>
                </div>
        @endforeach
    </main>

</div>
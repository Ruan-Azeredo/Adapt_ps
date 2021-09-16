@extends('movies.main')

@section('title', 'Filme | Adapti PS')

@section('content')

    
        
        <div class='container-poster'>
            @foreach ($movies as $movie)
                <img src="/storage/{{ $movie->image_poster }}" class='image-poster'>
            @endforeach
            @foreach ($movies as $movie)
                <div class='poster-box'>
                    <div class='poster-box2'>
                        <h4 class='write-poster title-poster'>{{ $movie->title }}</h4>
                        <h4 class='write-poster rating-poster'>{{ $movie->rating }}</h4>
                    </div>
                </div>
            @endforeach
            <div class='gradient'></div>
        </div>

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
@endsection
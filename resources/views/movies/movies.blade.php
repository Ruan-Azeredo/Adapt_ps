@extends('movies.main')

@section('title', 'Filme | Adapti PS')

@section('content')

    
      
        <div class='container-poster'>
            @foreach ($movies as $movie)
                <div class='gradient'></div>
                <img src="/storage/{{ $movie->image_poster }}" class='image-poster'>
                <div class='poster-box'>
                    <div class='poster-box2'>
                        <div class='write-poster title-poster'>{{ $movie->title }}</div>
                        <div class='write-poster rating-poster'>&#9733;&#9733;&#9733;&#9733;&#9733;              {{ $movie->rating }}</div>
                    </div>
                </div>
            @endforeach

        </div>

        <main class='main'>
            @foreach ($movies as $movie)
                    <div class='container-movies'>
                        <div class='cont-img-name'>
                            <img src="{{ url("/storage/{$movie->image}") }}" alt="{{ $movie->title }}" class='image'>
                            <h4 class='title'>{{ $movie->title }}</h4>       
                        </div>
                        <input type="checkbox" id="ossm" name="ossm" class='button-hiden'> 
                        <label for="ossm">
                            <div class='infos'>
                                <div class='especify genre'>Genre: {{ $movie->genre }}</div>
                                <div class='especify country'>Country: {{ $movie->country->name }}</div>
                                <div class='especify realese'>Release: {{ $movie->release }}</div>
                                <div class='especify sinopsis'>Sinopsis: {{ $movie->synopsis }} </div>
                                <div class='edit-e-delete'>
                                    <a href="{{ route('movies.edit',$movie->id) }}" class='especify edit-button button'><button>Edit</button></a>
                                    <form id="form-delete" action="{{ route('movies.destroy',$movie->id) }}" method="POST"> {{--Botão de delete de um filme--}}
                                        @csrf {{--Filtro de proteção que deve ter em todos os blades--}}
                                        @method('delete') {{--Forma de adicionar DELETE ou PUT ou PATCH--}}
                                        <a type="submit" class='especify delete button'><button>Delete</button></a>
                                    </form>
                                </div>
                            </label>
                        </div>
                    </div>
            @endforeach
        </main>

    
@endsection
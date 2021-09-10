<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Adapt</title>
    
</head>
<body>
<form action="{{ route("movies.index") }}" method="get">
    @csrf
    <input type="text" name="search" required placeholder="search"/>
    <button type="submit">Pesquisar</button>
</form>
<a href="{{ route('movies.create') }}"><button>Criar</button></a> {{--Botão para ir para o ambiente de criação de um novo filme--}}

    @foreach ($movies as $movie)
            <div>
                <h4>{{ $movie->title }}</h4>
                <div>País: {{ $movie->country->name }}</div>
                <div>Data de Lançamento: {{ $movie->release }}</div>
                <div>Sinopse: {{ $movie->name }} </div>
                <img src="{{ url("/storage/{$movie->image}") }}" alt="{{ $movie->title }}">
                <a href="{{ route('movies.edit',$movie->id) }}"><button>Editar</button></a>

                <form id="form-delete" action="{{ route('movies.destroy',$movie->id) }}" method="POST"> {{--Botão de delete de um filme--}}
                    @csrf {{--Filtro de proteção que deve ter em todos os blades--}}
                    @method('delete') {{--Forma de adicionar DELETE ou PUT ou PATCH--}}
                    <a type="submit"><button>Deletar</button></a>
                </form>
            </div>
    @endforeach
</body>
</html>
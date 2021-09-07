<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Adapt</title>
    
</head>
<body>
<a href="{{ route('movies.create') }}"><button>Criar</button></a>
    @foreach ($movies as $movie)
            <div class = box>
                <h4>{{ $movie->title }}</h4>
                <div>País: {{ $movie->country->name }}</div>
                <div>Data de Lançamento: {{ $movie->release }}</div>
                <div>Sinopse: {{ $movie->name }} </div>
                <img src="{{ url("/storage/{$movie->image}") }}" alt="{{ $movie->title }}">
                <a href="{{ route('movies.edit',$movie->id) }}"><button>Editar</button></a>
            </div>
    @endforeach
</body>
</html>
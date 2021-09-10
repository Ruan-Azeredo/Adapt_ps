<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Filme | Adapti PS</title>
</head>
<body>
    <form id="form-create" action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf                      {{--Rota que leva ao controle, 'php artisan route:list' para conferir as rotas e respectivos metodos--}}
        @method('PUT')
        <input type="text" value="{{ $movie->title }}" name="title" required>
        <input type="text"  value="{{ $movie->genre }}" name="genre" required>
        <input type="number" max="10" type="text"  value={{ $movie->country_id }} name="country_id" required>
        <input type="text" value="{{ $movie->release }}" name="release" required>
        <input type="text" value="{{ $movie->rating }}" name="rating" required>
        <textarea name="synopsis" id="synopsis" cols="30" rows="10"></textarea>
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
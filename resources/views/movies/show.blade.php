<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Filme | Adapti PS</title>
</head>
<body>
    <form id="form-show" action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("GET")
        <input type="text" name="title" required>
        {{-- <input type="text" name="genre" required> --}}
        {{-- <input type="number" max="10" type="text" name="country_id" required> --}}
        {{-- <input type="text" name="release" required>
        <input type="text" name="rating" required>
        <textarea name="synopsis" id="synopsis" cols="30" rows="10"></textarea>
        <input type="file" name="image" accept="image/*" required> --}}
        <button type="submit">Procurar</button>
    </form>
</body>
</html>
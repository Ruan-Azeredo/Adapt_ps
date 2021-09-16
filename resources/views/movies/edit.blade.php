@extends('movies.main')

@section('title', 'Edit Filme | Adapti PS')

@section('content')

    <form id="form-edit" action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf                      {{--Rota que leva ao controle, 'php artisan route:list' para conferir as rotas e respectivos metodos--}}
        @method('PUT')
        <input type="text" value="{{ $movie->title }}" name="title" required class='edit-area title-edit'>
        <input type="text"  value="{{ $movie->genre }}" name="genre" required class='edit-area genre-edit'>
        <input type="number" max="10" type="text"  value={{ $movie->country_id }} name="country_id" required class='edit-area country-edit'>
        <input type="text" value="{{ $movie->release }}" name="release" required class='edit-area realese-edit'>
        <input type="text" value="{{ $movie->rating }}" name="rating" required class='edit-area rating-edit'>
        <textarea name="synopsis" id="synopsis"  cols="30" rows="10" class='edit-area synopsis-edit'>{{ $movie->synopsis }}</textarea>
        
        <input type="file" name="image" accept="image/*" class='edit-area file-edit'>
        <img src="/storage/{{ $movie->image }}" class='img-edit'>
        
        <input type="file" name="image_poster" accept="image/*" class='edit-area file-edit'>
        <img src="/storage/{{ $movie->image_poster }}" class='img-poster-edit'>
        
        <button type="submit" class='save-button'>Salvar</button>
    </form>
@endsection


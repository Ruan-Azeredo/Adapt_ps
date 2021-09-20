@extends('movies.main')

@section('title', 'Edit Filme | Adapti PS')

@section('content')

    <form id="form-edit" action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        {{-- <div class='form-flex'> --}}
            @csrf                      {{--Rota que leva ao controle, 'php artisan route:list' para conferir as rotas e respectivos metodos--}}
            @method('PUT')
            <div class='div-edit title-edit-container'>
                <h4 class='edit-description'>Title</h4>
                <input type="text" value="{{ $movie->title }}" name="title" required class='edit-area title-edit'>
            </div>
            <div class='div-edit genre-edit-container'>
                <h4 class='edit-description'>Genre</h4>
                <input type="text"  value="{{ $movie->genre }}" name="genre" required class='edit-area genre-edit'>
            </div>
            <div class='div-edit country-edit-container'>
                <h4 class='edit-description'>Country</h4>
                <input type="number" max="10" type="text"  value={{ $movie->country_id }} name="country_id" required class='edit-area country-edit'>
            </div>
            <div class='div-edit realese-edit-container'>
                <h4 class='edit-description'>Release</h4>
                <input type="text" value="{{ $movie->release }}" name="release" required class='edit-area realese-edit'>
            </div>
            <div class='div-edit rating-edit-container'>
                <h4 class='edit-description'>Rating</h4>
                <input type="text" value="{{ $movie->rating }}" name="rating" required class='edit-area rating-edit'>
            </div>
            <div class='div-edit synopsis-edit-container'>
                <h4 class='edit-description'>Synopsis</h4>
                <textarea name="synopsis" id="synopsis"  cols="30" rows="10" class='edit-area synopsis-edit'>{{ $movie->synopsis }}</textarea>
            </div>
            <div class='div-edit file-edit1-container'>
                <h4 class='edit-description'>Movie Poster</h4>
                <input type="file" name="image" accept="image/*" class='edit-area file-edit1'>
                <img src="/storage/{{ $movie->image }}" class='img-edit'>
            </div>
            <div class='div-edit file-edit2-container'>
                <h4 class='edit-description'>Movie Wallpaper</h4>
                <input type="file" name="image_poster" accept="image/*" class='edit-area file-edit2'>
                <img src="/storage/{{ $movie->image_poster }}" class='img-poster-edit'>
            </div>
            <button type="submit" class='save-button'>Salvar</button>
        {{-- </div> --}}
    </form>
@endsection


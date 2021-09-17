@extends('movies.main')

@section('title', 'Create Filme | Adapti PS')

@section('content')

    <form id="form-create" action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
        <div class='form-flex'>
            @csrf
            <div class='div-create title-create-container'>
                <h4 class='create-description'>Title</h4>
                <input type="text" name="title" required class='create-area title-create'>
            </div>
            <div class='div-create genre-create-container'>
                <h4 class='create-description'>Genre</h4>
                <input type="text" name="genre" required class='create-area genre-create'>
            </div>
            <div class='div-create country-create-container'>
                <h4 class='create-description'>Country</h4>
                <input type="number" max="10" type="text" name="country_id" required class='create-area country-create'>
            </div>
            <div class='div-create realese-create-container'>
                <h4 class='create-description'>Release</h4>
                <input type="text" name="release" required class='create-area realese-create'>
            </div>
            <div class='div-create rating-create-container'>
                <h4 class='create-description'>Rating</h4>
                <input type="text" name="rating" required class='create-area rating-create'>
            </div>
            <div class='div-create synopsis-create-container'>
                <h4 class='create-description'>Synopsis</h4>
                <textarea name="synopsis" id="synopsis" cols="30" rows="10" class='create-area synopsis-create'></textarea>
            </div>
            <div class='div-create file-create1-container'>
                <h4 class='create-description'>Movie Poster</h4>
                <input type="file" name="image" accept="image/*" required class='create-area file-create1'>
            </div>
            <div class='div-create file-create2-container'>
                <h4 class='create-description'>Movie Wallpaper</h4>
                <input type="file" name="image_poster" accept="image/*" class='create-area file-create2'>
            </div>
            <button type="submit" class='save-button'>Save</button>
        </div>
    </form>
@endsection

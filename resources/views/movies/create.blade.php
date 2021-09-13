@extends('movies.main')

@section('title', 'Create Filme | Adapti PS')

@section('content')

<form id="form-create" action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" required class='create-area title-create'>
    <input type="text" name="genre" required class='create-area genre-create'>
    <input type="number" max="10" type="text" name="country_id" required class='create-area country-create'>
    <input type="text" name="release" required class='create-area realese-create'>
    <input type="text" name="rating" required class='create-area rating-create'>
    <textarea name="synopsis" id="synopsis" cols="30" rows="10" class='create-area synopsis-create'></textarea>
    <input type="file" name="image" accept="image/*" required class='create-area file-create'>
    <button type="submit">Salvar</button>
</form>

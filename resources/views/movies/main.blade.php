<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;600&display=swap" rel="stylesheet">
</head>
<body>
    <div class='container'>
        <header class='header initial'>
            <form action="{{ route("movies.index") }}" method="get" class='search'>
                @csrf
                <div class='header-container'>
                    <input type="text" name="search" required placeholder="Search" class='search-text'/>
                    <button type="submit" class='search-button'>&#8981;</button>
                </div>
                <img src='img/logoBRA.png' class='logo-adapti'>
            </form>
        </header>

        <div class='spacement-header'></div>

        <aside class='aside'>
            <a href="{{ route('movies.index') }}"><img src='img/pagina-inicial.png' class='link-aside home'></a>
            <a href="{{ route('movies.create') }}"><img src='img/new-document.png' class='link-aside create'></a> {{--Botão para ir para o ambiente de criação de um novo filme --}}
        </aside>

        {{-- <div class='spacement-aside'></div> --}}

        @yield('content')

        <footer>Footer to test<footer>
    </div>
</body>
</html>
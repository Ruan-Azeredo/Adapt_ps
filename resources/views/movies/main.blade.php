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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
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
                <a href='https://www.adapti.info/'><img src="{{URL::asset('img/logoBRA.png')}}" class='logo-adapti'></a>
            </form>
        </header>

        <div class='spacement-header'></div>

        <aside class='aside'>
            <a href="{{ route('movies.index') }}"><i class="fas fa-home"></i></a>
            <a href="{{ route('movies.create') }}"><i class="far fa-file-video"></i></a> {{--Botão para ir para o ambiente de criação de um novo filme --}}
            <button id="theme-toggle" class="button-dark-light" type="button">
                <i class="fas fa-adjust"></i>
            </button>
        </aside>

        @yield('content')

        <footer class='footer'><div> Developed by Ruan with &#9825; for Adapti-Soluções Web  2021</div>
            <div class='redes'>
                <a href='https://www.instagram.com/adapti.ps/'><i class="fab fa-instagram"></i></a>
                <a href='https://www.instagram.com/adapti.ps/'><i class="fab fa-facebook-square"></i></a>
            </div>
        <footer>
    </div>
</body>
<script src="{{ asset('/js/script.js') }}"></script>
</html>
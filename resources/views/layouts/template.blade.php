<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <title>@yield('Template')</title>
</head>
<body>
    <header class="header-container">
        <h6 class="titulo">Adapti Filmes</h6>

        <nav class="nav-container">
            <ul class="nav-items">
                <li><a class="back-button" href="{{ route('movie.index') }}">Inicio</a></li>
                <li><a class="create-button" href="{{ route('movie.create') }}">ADICIONAR FILMES</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-container">
        @yield('content')
    </main>

    <footer class="footer-container">
        <p class="development">Desenvolvido com ❤ 2021 Adapti-Soluções Web</p>
        <a class="facebook-adapti" href="https://www.facebook.com/AdaptiEmpresaJr">Facebook</a>
        <a class="instagram-adapti" href="https://www.instagram.com/adaptiempresajr/">Instagram</a>
        <a class="linkedin-adapti" href="https://www.linkedin.com/company/adaptiempresajr/">Linkedin</a>
    </footer>
</body>
</html>
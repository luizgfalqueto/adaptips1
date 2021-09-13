<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="template.css">
    <title>@yield('Template')</title>
</head>
<body>
    <nav class="navbar-container">
        @yield('navbar-content')
        <h1 class="titulo">Adapti Filmes</h1>
        <a class="back-button" href="{{ route('movie.index') }}">Inicio</a>
        <a class="create-button" href="{{ route('movie.create') }}"><button>ADICIONAR FILMES</button></a>
    </nav>
    <div class="container">
        @yield('content')
    </div>
    <footer class="footer-container">
        @yield('footer-content')
        <p class="development">Desenvolvido com ❤ 2021 Adapti-Soluções Web</p>
        <a class="facebook-adapti" href="https://www.facebook.com/AdaptiEmpresaJr">Facebook</a>
        <a class="instagram-adapti" href="https://www.instagram.com/adaptiempresajr/">Instagram</a>
        <a class="linkedin-adapti" href="https://www.linkedin.com/company/adaptiempresajr/">Linkedin</a>
    </footer>
</body>
</html>
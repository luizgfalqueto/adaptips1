<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" type="imagex/png" href="/images/logo-adapti.png">
    <link rel="stylesheet" href="/css/forms.css">
    <link rel="stylesheet" href="/css/template.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <title>@yield('Template')</title>
</head>
<body>
    <header class="header-container">
        <img class="logo-adapti" src="/images/logo-adapti.png" alt="logo-adapti">
        <h6 class="titulo">Adapti Filmes</h6>

        <nav class="nav-container">
            <ul class="nav-items">
                {{-- <li><a class="back-button" href="{{ route('movie.index') }}">Inicio</a></li> --}}
                @yield('home')
                <li><a class="create-button" href="{{ route('movie.create') }}">Adicionar filme</a></li>
            </ul>
        </nav>
    </header>

    <main class="main-container">
        @yield('content')
    </main>

    <footer class="footer-container">
        <p class="development">Desenvolvido com &#9829; 2021 Adapti-Soluções Web</p>
        <ul class="footer-items">
            <li><a class="facebook-adapti" href="https://www.facebook.com/AdaptiEmpresaJr"><img src="/icons/logo-facebook.png" alt="logo-facebook"></a></li>
            <li><a class="instagram-adapti" href="https://www.instagram.com/adaptiempresajr/"><img src="/icons/logo-instagram.png" alt="logo-instagram"></a></li>
            <li><a class="linkedin-adapti" href="https://www.linkedin.com/company/adaptiempresajr/"><img src="/icons/logo-linkedin.png" alt="logo-linkedin"></a></li>
        </ul>
    </footer>
</body>
</html>
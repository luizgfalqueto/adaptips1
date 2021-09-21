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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <title>@yield('Template')</title>
</head>
<body>
    <header class="header-container">
        <div class="div-logo-titulo">
            <img class="logo-adapti" src="/images/logo-adapti.png" alt="logo-adapti">
            <h6 class="titulo">Adapti Filmes</h6>
        </div>

        <nav class="nav-container">
            <ul class="nav-items">
                {{-- @yield('home') --}}
                <li><a class="back-button" href="{{ route('movie.index') }}"><i class="fas fa-home"></i>Início</a></li>
                <li><a class="create-button" href="{{ route('movie.create') }}"><button><i class="fas fa-plus-circle"></i>Adicionar filme</button></a></li>
            </ul>
        </nav>
    </header>

    <main class="main-container">
        @yield('content')
    </main>

    <footer class="footer-container">
        <p class="development">Desenvolvido com &#9829; 2021 Adapti-Soluções Web</p>
        <ul class="footer-items">
            <li><a class="facebook-adapti" href="https://www.facebook.com/AdaptiEmpresaJr"><i class="fab fa-facebook-f"></i></a></li>
            <li><a class="instagram-adapti" href="https://www.instagram.com/adaptiempresajr/"><i class="fab fa-instagram"></i></a></li>
            <li><a class="linkedin-adapti" href="https://www.linkedin.com/company/adaptiempresajr/"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
    </footer>
</body>
</html>
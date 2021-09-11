<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies | Adapti</title>
</head> 
<body>
    <header>
        <h1>Adapti Filmes</h1>
        <a href="{{ route('movie.create') }}"><button>Criar</button></a>

        <div class="search-container" style="width: 500px">
            <form class="form-search" action="{{ route('movie.search') }}" method="post">
                @csrf
                <input type="text" name="search" placeholder="Buscar filme">
                <button type="submit">Pesquisar</button>
            </form>
        </div>
    </header>
    <main>
        
        @foreach ($movies as $movie)
            <div>
                <p>Title: {{ $movie->title }}</p>
                <p>Country: {{ $movie->country->name }}</p>
                <p>Genre: {{ $movie->genre }}</p>
                <p>Synopsis: {{ $movie->synopsis }}</p>
                <p>Rating: {{ $movie->rating }}</p>
                <img src="https://picsum.photos/200/300?random=1">

                <a href="{{ route('movie.edit', $movie->id) }}">Editar</a>

                <form action="{{ route('movie.destroy',$movie->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Deletar</button>
                </form>

                <hr>
            </div>
        @endforeach
    </main>
    <footer>
        <p>Created by Luiz Gustavo</p>
    </footer>
</body>
</html>
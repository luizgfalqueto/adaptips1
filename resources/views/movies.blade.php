<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies | Adapti</title>
</head>
<body>
    <div id="search-container" style="width: 500px">
        <form action="{{ route('movie.search') }}" method="post">
            @csrf
            <input type="text" name="search" placeholder="Buscar filme">
            <button type="submit">Pesquisar</button>
        </form>
    </div>
    <a href="{{ route('movie.create') }}"><button>Criar</button></a>
    @foreach ($movies as $movie)
        <h4>{{ $movie->title }}</h4>
        <p>{{ $movie->country->name }}</p>
        <p>{{ $movie->genre }}</p>
        <p>{{ $movie->synopsis }}</p>
        <img src="storage/{{ $movie->image }}" alt="Imagem" width="80" height="100"/>
        <a href="{{ route('movie.edit', $movie->id) }}">Editar</a>
        <form action="{{ route('movie.destroy',$movie->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Deletar</button>
        </form>
    @endforeach
</body>
</html>
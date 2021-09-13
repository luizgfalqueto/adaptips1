@extends('templates.template')

@section('Template', 'Movies | Adapti PS')

@section('content')
    <div class="search-container" style="width: 500px">
        <form class="form-search" action="{{ route('movie.search') }}" method="post">
            @csrf
            <input class="search-input" type="text" name="search" placeholder="PESQUISAR">
            <button class="search-button" type="submit">Pesquisar</button>
        </form>
    </div>
    <h1>Filmes</h1>
    <hr>
    @foreach ($movies as $movie)
    <div class="movie-content">
        <p class="p-content-movie">Title: {{ $movie->title }}</p>
        <p class="p-content-movie">Country: {{ $movie->country->name }}</p>
        <p class="p-content-movie">Genre: {{ $movie->genre }}</p>
        <p class="p-content-movie">Synopsis: {{ $movie->synopsis }}</p>
        <p class="p-content-movie">Rating: {{ $movie->rating }}</p>
        <img class="image-content" alt="poster do filme" src="https://picsum.photos/200/300?random=1">

        <a class="edit-button" href="{{ route('movie.edit', $movie->id) }}">Editar</a>

        <form class="delete-form" action="{{ route('movie.destroy',$movie->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="delete-button" type="submit">Deletar</button>
        </form>

    </div>
    @endforeach
@endsection
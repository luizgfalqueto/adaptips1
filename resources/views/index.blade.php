@extends('layouts.template')

@section('Template', 'Movies | Adapti PS')

@section('content')
    <form class="form-search" action="{{ route('movie.search') }}" method="post">
        @csrf
        <input class="input-search" type="text" name="search" placeholder="PESQUISAR" required>
        <button class="button-submit" type="submit">Pesquisar</button>
    </form>
    
    <h1>Filmes</h1>
    
    @foreach ($movies as $movie)
        <div class="card-movie">
            <h3>{{ $movie->title }}</h3>

            <div class="buttons-container">
                <a class="edit-button" href="{{ route('movie.edit', $movie->id) }}">Editar</a>
                <form class="delete-form" action="{{ route('movie.destroy',$movie->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="delete-button" type="submit">Deletar</button>
                </form>
            </div>

            <img class="image-content" alt="poster do filme" src="https://picsum.photos/200/300?random=1">

            <div class="info-container">
                <p class="specify genre">{{ $movie->genre }}</p>
                <p class="specify country"><strong>País:</strong> {{ $movie->country->name }}</p>
                <p class="specify release"><strong>Lançamento:</strong> {{ $movie->release}}</p>
                <p class="specify rating"><strong>Nota:</strong> {{ $movie->rating }}</p>
                <p class="specify synopsis"><strong>Sinopse:</strong> {{ $movie->synopsis }}</p>
            </div>

        </div>
    @endforeach
@endsection
@extends('layouts.template')

@section('Template', 'Movies | Adapti PS')

@section('content')
    <div class="div-top">
        <form class="form-search" action="{{ route('movie.search') }}" method="post">
            @csrf
            <input class="input-search" type="text" name="search" placeholder="Pesquisar um filme" required>
            <button class="button-submit" type="submit"><img src="/icons/search.png" alt="pesquisar"></button>
        </form>
        
        <h1>Filmes</h1>
    </div>
    
    <div class="box-card">
        @foreach ($movies as $movie)
            <div class="card-movie">
                <div class="top-card">
                    <h3>{{ $movie->title }}</h3>

                    <div class="buttons-container">
                        <a class="edit-button" href="{{ route('movie.edit', $movie->id) }}"><img src="/icons/edit.png" alt="edit"></a>
                        <form class="delete-form" action="{{ route('movie.destroy',$movie->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="delete-button" type="submit"><img src="/icons/delete.png" alt="delete"></button>
                        </form>
                    </div>
                </div>

                <img class="image-content" alt="poster do filme" src="storage/{{$movie->first()->image}}">

                <div class="info-container">
                    <p class="specify genre">{{ $movie->genre }}</p>
                    <p class="specify country"><strong>País:</strong> {{ $movie->country->name }}</p>
                    <p class="specify release"><strong>Lançamento:</strong> {{ $movie->release}}</p>
                    <p class="specify rating"><strong>Nota:</strong> {{ $movie->rating }}/10</p>
                    <p class="specify synopsis"><strong>Sinopse:</strong> {{ $movie->synopsis }}</p>
                </div>

            </div>
        @endforeach
        
    </div>

@endsection
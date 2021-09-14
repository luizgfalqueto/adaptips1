@extends('layouts.template')

@section('Template', 'Editar Filme | Adapti PS')

@section('content')
    <form class="form-crud" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Nome do filme</label>
        <input id="title" class="input-form" type="text" name="title" value="{{ $movie->title }}" required>

        <label for="genre">Gênero</label>
        <input id="genre" class="input-form" type="text" name="genre" value="{{ $movie->genre }}" required>

        <label for="release">Data de lançamento</label>
        <input id="release" class="input-form" type="date" name="release" value="{{ $movie->release }}" required>

        <label for="country_id">País</label>
        <select class="select-country" name="country_id" id="country_id">
            <option value="" disabled selected>-- Escolha um país --</option>
            @foreach($countries as $country)
                <option class="option-country" value="{{ $country->id }}" {{ $country->id == $movie->country_id ? 'selected':'' }}>{{ $country->name }}</option>
            @endforeach
        </select>
        
        <label for="rating">Nota</label>
        <input id="rating" class="input-form" type="text" name="rating" value="{{ $movie->rating }}" required>

        <label for="synopsis">Sinopse do filme</label>
        <textarea id="synopsis" class="input-form" name="synopsis" id="synopsis" cols="30" rows="10">{{ $movie->synopsis }}</textarea>

        <label for="image">Imagem</label>
        <input class="input-movie" id="image" type="file" name="image" accept="image/*" required>
        <img src="/storage/{{ $movie->image }}" style="width:100px;height:100px;" alt="poster do filme {{$movie->title}}">

        <button class="button-form" type="submit">EDITAR FILME</button>
        <a class="buttonback-form" href="{{ route('movie.index') }}">VOLTAR</a>
    </form>

    <form class="delete-form" action="{{ route('movie.destroy',$movie->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="delete-button" type="submit">DELETAR FILME</button>
    </form>

@endsection
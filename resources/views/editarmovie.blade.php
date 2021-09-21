@extends('layouts.template')

@section('Template', 'Editar Filme | Adapti PS')

@section('home')
    <li><a class="back-button" href="{{ route('movie.index') }}"><i class="fas fa-home"></i>Início</a></li>
@endsection

@section('content')
    
    <div class="div-form">
        <div class="title-form">
            <h2>Formulário de edição de filme</h2>
        </div>
        <form class="form-crud" action="{{ route('movie.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

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
            <input class="input-movie" id="image" type="file" name="image" accept="image/*">
            <img class="img-movie" src="/storage/{{ $movie->image }}" alt="poster do filme {{$movie->title}}">
    
            <button class="button-form" type="submit">Salvar</button>
            <a class="buttonback-form" href="{{ route('movie.index') }}">Voltar</a>
        </form>
    </div>

@endsection
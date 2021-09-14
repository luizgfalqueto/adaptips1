@extends('layouts.template')

@section('Template', 'Adicionar Filme | Adapti PS')

@section('content')
    <form class="form-crud" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="title">Nome do filme</label>
        <input id="title" class="input-form" type="text" name="title" placeholder="Titulo" required>

        <label for="genre">Gênero</label>
        <input id="genre" class="input-form" type="text" name="genre" placeholder="Genero" required>

        <label for="release">Data de lançamento</label>
        <input id="release" class="input-form" type="date" name="release" placeholder="Lançamento" required>

        <label for="country_id">País</label>
        <select class="select-country" name="country_id" id="country_id">
            <option value="" disabled selected>-- Escolha um país --</option>
            @foreach($countries as $country)
                <option class="option-country" value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        
        <label for="rating">Nota</label>
        <input id="rating" class="input-form" type="text" name="rating" placeholder="Nota" required>

        <label for="synopsis">Sinopse do filme</label>
        <textarea id="synopsis" class="input-form" name="synopsis" id="synopsis" cols="30" rows="10"></textarea>

        <input class="input-movie" type="file" name="image" accept="image/*" required>

        <button class="button-form" type="submit">CRIAR FILME</button>
        <a class="buttonback-form" href="{{ route('movie.index') }}">VOLTAR</a>
    </form>
    
@endsection

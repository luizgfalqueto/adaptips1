@extends('templates.template')

@section('Template', 'Criar Filme | Adapti PS')

@section('content')
    <form class="create-form" id="form-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="input-title">Nome do filme</label>
        <input id="input-title" class="input-movie" type="text" name="title" placeholder="Titulo" required>

        <label for="input-genre">Gênero</label>
        <input id="input-genre" class="input-movie" type="text" name="genre" placeholder="Genero" required>

        <label for="input-release">Data de lançamento</label>
        <input id="input-release" class="input-movie" type="text" name="release" placeholder="Lançamento" required>

        <label for="country_id">País</label>
        <select class="select-country" name="country_id" id="country_id">
            @foreach($countries as $country)
                <option class="option-country" value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        
        <label for="input-rating">Nota</label>
        <input id="input-rating" class="input-movie" type="text" name="rating" placeholder="Nota" required>

        <label for="input-synopsis">Sinopse do filme</label>
        <textarea id="input-synopsis" class="textarea-synopsis" name="synopsis" id="synopsis" cols="30" rows="10"></textarea>

        <input class="input-movie" type="file" name="image" accept="image/*" required>
        <button class="create-button" type="submit">CRIAR FILME</button>
    </form>
    
    <a class="back-button" href="{{ route('movie.index') }}"><button>VOLTAR</button></a>

@endsection

@extends('templates.template')

@section('Template', 'Editar Filme | Adapti PS')

@section('content')
    <form class="create-form" action="{{ route('movie.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input class="input-movie" value="{{ $movie->title }}" type="text" name="title" placeholder="Titulo" required>
        <input class="input-movie" value="{{ $movie->genre }}"type="text" name="genre" placeholder="Genero" required>
        <select class="select-country" value="{{ $movie->country_id }}" name="country_id" id="country_id">
            @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <input class="input-movie" value="{{ $movie->release }}" type="text" name="release" placeholder="Lançamento" required>
        <input class="input-movie" value="{{ $movie->rating }}"type="text" name="rating" placeholder="Nota" required>
        <textarea class="textarea-synopsis" name="synopsis" id="synopsis" cols="30" rows="10">{{ $movie->synopsis }}</textarea>
        <input class="input-movie" value="storage/{{ $movie->image }}" type="file" name="image" accept="image/*">
        <button class="save-button" type="submit">Salvar</button>
    </form>
@endsection
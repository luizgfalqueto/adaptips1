@extends('templates.template')

@section('Template', 'Criar Filme | Adapti PS')

@section('content')
    <form class="create-form" id="form-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input class="input-movie" type="text" name="title" placeholder="Titulo" required>
        <input class="input-movie" type="text" name="genre" placeholder="Genero" required>
        <select class="select-country" name="country_id" id="country_id">
            @foreach($countries as $country)
                <option class="option-country" value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <input class="input-movie" type="text" name="release" placeholder="Lançamento" required>
        <input class="input-movie" type="text" name="rating" placeholder="Nota" required>
        <textarea class="textarea-synopsis" name="synopsis" id="synopsis" cols="30" rows="10"></textarea>
        <input class="input-movie" type="file" name="image" accept="image/*" required>
        <button class="input-movie" type="submit">Salvar</button>
    </form>
@endsection

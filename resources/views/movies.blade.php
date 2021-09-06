<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Adapti</title>
</head>
<body>
    <div style="background-color: #aaacad">
        
        @foreach ($movies as $movie)
            <h2> Titulo: {{ $movie->title }} </h2>
            <h4> &nbsp &nbsp Genero: {{ $movie->genre }} </h4>
            <h4> &nbsp &nbsp Lançamento: {{ $movie->release }} </h4>
            <h4> &nbsp &nbsp Sinopse: {{ $movie->synopsis }} </h4>
            <h4> &nbsp &nbsp País: {{ $movie->country->country }} </h4>
            <h4> &nbsp &nbsp Avaliação: {{ $movie->rating }} </h4>
            
        @endforeach
        
    </div>
</body>
</html>
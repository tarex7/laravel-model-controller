@extends('Movies.layouts.main');

@section('main-content')
    
<div class="row">
        
    <div class="col d-flex justify-content-center">
        <div class="card text-center my-3 bg-dark text-white p-4 text-center w-75" style="min-height: 300px">
            <h2>{{ $movie->title }}</h2>
            <p>Titolo originale: {{ $movie->original_title }}</p>
            <p>Nazionalità: {{ $movie->nationality }}</p>
            <p>Anno: {{ $movie->getYear() }}</p>
            <p>Voto: {{ $movie->vote }}</p>
            <h5>Trama:</h5>
            <div class="d-flex justify-content-center">
                <p class="w-50">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur fugiat expedita, voluptatibus, dolore, nostrum quibusdam repudiandae ducimus inventore dolores amet id debitis? Dolorem ducimus deserunt dolorum voluptatibus cum nisi, odit tenetur autem accusantium ipsum nostrum explicabo vero. Architecto dolorem nobis, velit incidunt numquam consequatur eaque saepe hic unde optio quisquam.</p>
            </div>
            <div class="dflex"><a href="{{ route('movies.index') }}" class="btn btn-primary w-25">Torna indietro</a></div>
        </div>

    </div>
</div>
@endsection
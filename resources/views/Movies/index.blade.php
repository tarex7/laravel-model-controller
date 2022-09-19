@extends('Movies.layouts.main');

@section('main-content')
<div class="row">
            
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">Titolo originale</th>
                <th scope="col">Nazionalità</th>
                <th scope="col">Voto</th>
                <th></th>
            </tr>
        </thead>
        @foreach ($movies as $movie)
        <tbody>
          <tr>
            <td scope="row">{{ $movie->title }}</td>
            <td>{{ $movie->original_title }}</td>
            <td>{{ $movie->nationality }}</td>
            <td>{{ $movie->vote }}</td>
            <td><a class="btn btn-primary btn-small" href="{{ route('movies.show', ['id'=>$movie->id]) }}">Scopri di più</a></td>
          </tr>
          @endforeach
         
        </tbody>
      </table>

</div>
@endsection
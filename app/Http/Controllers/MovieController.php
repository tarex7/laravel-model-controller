<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Movie;


class movieController extends Controller
{
    function index($id) {
        $movies = Movie::all();
        $movie = $movies[$id - 1];
        return view('movies.show', ['movies'=>$movies, 'movie'=>$movie]);
    }

  
}

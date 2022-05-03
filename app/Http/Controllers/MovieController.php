<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index(){
        return view('welcome', [
            'movies' => Movie::all()
        ]);
    }

    public function show(Movie $movie){
        return view('show', [
            'movie' => $movie
        ]);
    }
}

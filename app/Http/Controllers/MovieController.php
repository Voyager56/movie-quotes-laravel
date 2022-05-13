<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quotes;

class MovieController extends Controller
{
	public function index()
	{
		return view('welcome', [
			'movie' => Quotes::all()->random()->movie,
			'lang'  => session()->get('lang'),
		]);
	}

	public function show(Movie $movie)
	{
		return view('show', [
			'movie' => $movie,
			'lang'  => session()->get('lang'),
		]);
	}
}

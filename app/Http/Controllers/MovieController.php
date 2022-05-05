<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quotes;

class MovieController extends Controller
{
	public function index($lang = 'en')
	{
		return view('welcome', [
			'movie' => Quotes::all()->random()->movie,
			'lang'  => $lang,
		]);
	}

	public function show($lang, Movie $movie)
	{
		return view('show', [
			'movie' => $movie,
			'lang'  => $lang,
		]);
	}
}

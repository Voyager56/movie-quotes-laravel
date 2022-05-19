<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quotes;
use Illuminate\View\View;

class MovieController extends Controller
{
	public function index(): View
	{
		return view('welcome', [
			'movie' => Quotes::all()->random()->movie,
			'lang'  => session()->get('lang'),
		]);
	}

	public function show(Movie $movie): View
	{
		return view('show', [
			'movie' => $movie,
			'lang'  => session()->get('lang'),
		]);
	}
}

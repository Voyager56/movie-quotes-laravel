<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class AdminMovieController extends Controller
{
	public function index()
	{
		return view('admin.movies', [
			'movies' => Movie::all(),
		]);
	}

	public function create()
	{
		return view(
			'admin.create',
		);
	}
}
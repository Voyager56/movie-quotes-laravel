<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

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

	public function store()
	{
		$movie = request()->validate([
			'title'           => 'required',
			'thumbnail'       => 'required',
			//			'slug'            => [Rule::unique('movies', 'slug')],
		]);

//		$movie['slug'] = Str::slug(request('title'));

		Movie::create($movie);
		return redirect('/admin/movies');
	}
}

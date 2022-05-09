<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Support\Str;

class AdminMovieController extends Controller
{
	public function index()
	{
		return view('admin.movies', [
			'movies' => Movie::paginate(5)->withQueryString(),
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
		$data = request()->validate([
			'title'           => 'required',
			'title_ge' 	      => 'required',
			'thumbnail'       => 'required',
		]);

		$movie = [
			'title'           => [
				'en' => $data['title'],
				'ka' => $data['title_ge'],
			],
			'thumbnail'       => request()->file('thumbnail')->store('thumbnails'),
		];

		$movie['slug'] = Str::slug(request('title'));

		$slug = Movie::where('slug', $movie['slug'])->first();
		if ($slug)
		{
			return back()->with('message', 'Movie already exists');
		}

		Movie::create($movie);
		return redirect('/admin/movies/list');
	}

	public function edit(Movie $movie)
	{
		return view('admin.edit', [
			'movie' => $movie,
		]);
	}
}

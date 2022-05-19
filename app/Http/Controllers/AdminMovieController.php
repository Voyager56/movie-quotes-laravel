<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;

class AdminMovieController extends Controller
{
	public function index(): View
	{
		return view('admin.movies', [
			'movies' => Movie::paginate(5)->withQueryString(),
		]);
	}

	public function create(): View
	{
		return view(
			'admin.create',
		);
	}

	public function store(): RedirectResponse
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

	public function edit(Movie $movie): View
	{
		return view('admin.edit', [
			'movie' => $movie,
		]);
	}

	public function update(Movie $movie): RedirectResponse
	{
		$data = request()->validate([
			'title'           => 'min:3',
			'title_ge' 	      => 'min:3',
		]);

		$movie->update([
			'title'           => [
				'en' => $data['title'],
				'ka' => $data['title_ge'],
			],
			'thumbnail'       => request()->file('thumbnail') ? request()->file('thumbnail')->store('thumbnails') : $movie->thumbnail,
		]);

		return redirect('/admin/movies/list');
	}

	public function destroy(Movie $movie): RedirectResponse
	{
		$movie->delete();
		return redirect('/admin/movies/list');
	}
}

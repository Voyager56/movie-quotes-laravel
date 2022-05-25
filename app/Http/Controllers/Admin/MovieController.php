<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MovieRequest;
use App\Http\Requests\MovieUpdateRequest;
use App\Models\Movie;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

 class MovieController extends Controller
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

 	public function store(MovieRequest $request): RedirectResponse
 	{
 		$data = $request->validated();

 		$movie = $this->formatData($data);

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

 	public function update(Movie $movie, MovieUpdateRequest $request): RedirectResponse
 	{
 		$data = $request->validated();

 		$movie->update($this->formatData($data, $movie));

 		return redirect('/admin/movies/list');
 	}

 	public function destroy(Movie $movie): RedirectResponse
 	{
 		$movie->delete();
 		return redirect('/admin/movies/list');
 	}

 	private function formatData(array $data, Movie $movie = new Movie()): array
 	{
 		return ['title'           => [
 			'en' => $data['title'],
 			'ka' => $data['title_ge'],
 		],
 			'thumbnail'       => request()->file('thumbnail') ? request()->file('thumbnail')->store('thumbnails') : $movie->thumbnail,
 			'slug'            => Str::slug($data['title']), ];
 	}
 }

<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Quotes;

class QuotesController extends Controller
{
	public function store(Movie $movie)
	{
		// dd(request()->all());
		$data = request()->validate([
			'ka' => 'required',
			'en' => 'required',
		]);

		$quote = [
			'text' => [
				'en' => $data['en'],
				'ka' => $data['ka'],
			],
		];

		$movie->quotes()->create($quote);
		return redirect()->back();
	}

	public function destroy(Movie $movie, Quotes $quote)
	{
		$quote->delete();
		return redirect()->back();
	}
}

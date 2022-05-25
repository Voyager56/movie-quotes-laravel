<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
use App\Models\Movie;
use App\Models\Quotes;
use Illuminate\Http\RedirectResponse;

class QuotesController extends Controller
{
	public function store(Movie $movie, QuoteRequest $request): RedirectResponse
	{
		$data = $request->validated();

		$quote = [
			'text' => [
				'en' => $data['en'],
				'ka' => $data['ka'],
			],
		];

		$movie->quotes()->create($quote);
		return redirect()->back();
	}

	public function destroy(Movie $movie, Quotes $quote): RedirectResponse
	{
		$quote->delete();
		return redirect()->back();
	}
}

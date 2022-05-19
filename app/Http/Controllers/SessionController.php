<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class SessionController extends Controller
{
	public function destroy(): RedirectResponse
	{
		auth()->logout();
		return redirect('/');
	}

	public function create(): View
	{
		return view('sessions.create');
	}

	public function store(): RedirectResponse
	{
		$credentials = request()->validate([
			'email'    => 'required|email',
			'password' => 'required',
		]);

		// dd($credentials);

		if (!auth()->attempt($credentials))
		{
			return back()
				->withInput()
				->withErrors([
					'email'    => 'Invalid Email or Password',
					'password' => 'Invalid Email or Password',
				]);
		}

		return redirect('/')->with('message', 'Logged in successfully');
	}
}

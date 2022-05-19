<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
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

	public function store(LoginRequest $request): RedirectResponse
	{
		$credentials = $request->validated();

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

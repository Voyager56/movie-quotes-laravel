<?php

namespace App\Http\Controllers;

class SessionController extends Controller
{
	public function destroy()
	{
		auth()->logout();
	}

	public function create()
	{
		return view('sessions.create');
	}

	public function store()
	{
		$credentials = request()->validate([
			'email'    => 'required|email',
			'password' => 'required',
		]);

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

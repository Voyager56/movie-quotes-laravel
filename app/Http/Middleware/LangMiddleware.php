<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LangMiddleware
{
	/**
	 * Handle an incoming request.
	 *
	 * @param \Illuminate\Http\Request $request
	 * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
	 *
	 * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
	 */
	public function handle(Request $request, Closure $next)
	{
		app()->setLocale(session()->get('lang') ?: 'en');
		session()->put('lang', app()->getLocale());
		return $next($request);
	}
}

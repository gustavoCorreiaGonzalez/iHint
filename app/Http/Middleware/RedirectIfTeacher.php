<?php

namespace iHint\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfTeacher
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = 'teacher')
	{
	    if (Auth::guard($guard)->check()) {
	        return redirect('teacher/home');
	    }

	    return $next($request);
	}
}
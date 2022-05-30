<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $roleId = Auth::user()->roles->first()->id;

        if ($roleId == 1) {
            return $next($request);
        }

        $rolename = Auth::user()->getRoleNames()[0];
        return redirect(route($rolename . '.dashboard'));
    }
}

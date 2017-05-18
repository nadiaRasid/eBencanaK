<?php

namespace App\Http\Middleware;

use Closure;

class UserShareMiddleware
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
        if ($request->user()->role == 'Admin' || $request->user()->role == 'OrangAwam') {
            return $next($request);
        }

        session()->flash('message', 'Anda Tidak dibenarkan!');

        return back();
    }
}

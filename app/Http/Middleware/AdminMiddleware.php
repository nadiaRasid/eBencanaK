<?php

namespace App\Http\Middleware;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Contracts\Auth\Factory as Auth;
use Closure;

class AdminMiddleware
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
         if ($request->user()->role === 'Admin') {
            return $next($request);
        }

        session()->flash('message', 'Anda Tidak dibenarkan!');

        return back();
    }
}

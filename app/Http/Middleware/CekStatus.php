<?php

namespace App\Http\Middleware;

use Closure;

class CekStatus
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
        $user = \App\User::where('username', $request->username)->first();
        if ($user == 'dimas') {
            return redirect('projectku/index');
        } elseif {
            redirect()->back();
        }

        return $next($request);
    }
}

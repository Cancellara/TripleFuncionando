Redireciones al panel cuando se esta autenticado con un usuario (dar edit y ver código)

<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //dd(Auth::guard('admin')->check() && auth()->user()->isAdmin());
        if (Auth::guard('admin')->check() )
        {
            return redirect()->route('admin.panel');
        }
        elseif (Auth::guard('shop')->check())
        {
            return redirect()->route('shop.panel');
        }
        elseif (auth()->check())
        {
            return redirect('/home');
        }

        return $next($request);
    }
}

<?php 

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Route;

class CheckUserIsLoggedIn {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!$request->session()->get('user_can_view_site', false) && !$request->is('password'))
        {
            return redirect()->route('password_protect');
        }

        return $next($request);
    }

}
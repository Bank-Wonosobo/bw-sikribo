<?php

namespace App\Http\Middleware;

use App\Helper\AuthUser;
use Closure;
use Illuminate\Http\Request;

class OAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $user = AuthUser::user();

        if ($user == null) {
            return redirect()->route('auth.login');
        }else{
            if (in_array('bw:archive:access', $user->permissions)
            ){
                return $next($request);
            }
            abort(403, 'Tidak memiliki hak akses');
        }
    }
}

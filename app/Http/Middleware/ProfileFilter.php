<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;

class ProfileFilter
{
    protected $guard;

    public function __construct(Guard $guard) {
        $this->guard = $guard;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $profileID = $request->route('users');//mapping to route wildcard

        if($request->ajax()) {

            return response('Unauthorized.', 401);
        } else {

            return redirect()->guest('login');
        }

        return $next($request);
    }
}

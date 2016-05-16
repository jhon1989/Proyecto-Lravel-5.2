<?php

namespace Curso\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;


class Admin
{
    protected $auth;

    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
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
        if($this->auth->user()->id != 1)
        {
            Session::flash('message-error', 'Usuario sin permiso');
            return Redirect::to('admin');
        }
        return $next($request);
    }
}

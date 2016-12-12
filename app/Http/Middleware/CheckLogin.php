<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLogin
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
        //没有用户登录，$request->user()返回空，否则返回已经登录的用户实例
        if (is_null($request->user()))
            return redirect('Login');
        //使用Auth门面来判断用户是否登录，用户已经登录返回真，否则返回假
//        if (Auth::check())
//            return redirect('Login');
        return $next($request);
    }
}

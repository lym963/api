<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cookie;

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
        $_SERVER["CHECK_LOGIN"]=0;
        $token=Cookie::get("token");
        if($token){
            $url="http://passport.shop1.com/auth/token?token=".$token;
            $response=file_get_contents($url);
            if($response==1){
                $_SERVER["CHECK_LOGIN"]=1;
            }
        }

        return $next($request);
    }
}

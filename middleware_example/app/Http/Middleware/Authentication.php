<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $uname=$request->Route('uname');
        $pass=$request->Route('pass');

        if($uname=='admin' && $pass=='admin'){
            //echo("Success!....You are Eligible for Voting");
            return $next($request);
        }
        else{

            //dd("This is Else part");
            return redirect('/home');
        }
    }
}

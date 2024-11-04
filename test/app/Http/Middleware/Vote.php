<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Vote
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
    
        //For Get url using Query String 
        //$age=request('age');

        //For Grt url without query String
        //$age=$request->Route('age');

        $age=request('age');
        if($age > 18){
            //echo("Success!....You are Eligible for Voting");
            return $next($request);
        }
        else{
            //dd("This is Else part");
            return redirect('/');
        }
    }
}

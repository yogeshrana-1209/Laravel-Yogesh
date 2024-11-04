<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class subject
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $subject=$request->Route('subject');
        if($subject=='MCA'){
            //echo("This is Global Middleware");
            return $next($request);
        }
        else{
            //dd("This is Else part");
            return redirect('/');
        }
        // echo("This is Global Middleware....");
        // return $next($request);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CubeController extends Controller
{
    /**
     * Handle the incoming request.
     */
   
        // Single action method to calculate the cube of a number
    public function __invoke($number)
    {
        $cube = $number * $number * $number;
        //return response()->json(['cube' => $cube]);
        return 'The Cube '. $number .' is '.$cube;
    }
    
}

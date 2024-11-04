<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SquareController extends Controller
{
    /**
     * Handle the incoming request.
     */

    // Single action method to calculate the square of a number
    public function __invoke($number)
    {
        $square = $number * $number;
        //return response()->json(['square' => $square]);
        return 'The Square of '. $number .' is '.$square;
    }
    
}

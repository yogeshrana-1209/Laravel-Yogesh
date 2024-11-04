<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberController extends Controller
{
    //
    // Method to calculate the factorial of a number
    public function factorial($number)
    {
        if ($number < 0) {
            return response()->json(['error' => 'Factorial of a negative number does not exist'], 400);
        }
        
        $factorial = 1;

        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }

        //return response()->json(['factorial' => $factorial]);
        return 'The factorial of '. $number .' is '.$factorial;
    }

     // Method to calculate the sum of odd numbers up to the given number
     public function sumOfOddNumbers($number)
     {
         $sum = 0;
 
         // Loop through numbers up to the given number
         for ($i = 1; $i <= $number; $i += 2) {
             $sum += $i;
         }
 
         //return response()->json(['sum_of_odd_numbers' => $sum]);
         return 'The Sum of odd numbers upto... '. $number .' is '.$sum;
     }

     // Method to calculate the sum of even numbers up to the given number
    public function sumOfEvenNumbers($number)
    {
        $sum = 0;

        // Loop through numbers up to the given number
        for ($i = 2; $i <= $number; $i += 2) {
            $sum += $i;
        }

        //return response()->json(['sum_of_even_numbers' => $sum]);
        return 'The Sum of even numbers upto... '. $number .' is '.$sum;
    }
}

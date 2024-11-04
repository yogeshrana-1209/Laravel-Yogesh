<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperationController extends Controller
{
    public function factorial($n)
    {

    if ($n < 0) 
    {
        return "Factorial is not defined for negative numbers.";
    }

    $result = 1;
    for ($i = 1; $i <= $n; $i++) 
    {
        $result *= $i;
    }
    return $result;

    }

    public function sumodd($numodd)
    {
        
            
                for($numodd;$numodd>=0;$numodd--)
                {
                    $count =0;
                    // if($numodd%2 == 0)
                    // {
                    //     return 'This is Even Number';
                    // }
                    if($numodd%2 == 1)
                    {
                        $count += 1;
                        return $count;
                    }
                }
            
        
    }

    public function sumeven($even)
    {
        
        if($even < 0)
        {
            return "Sum of Even is not defined for negative numbers.";
        }
    }

}
    


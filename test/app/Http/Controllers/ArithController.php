<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArithController extends Controller
{
   
    public function add($a,$b)
    {
        
        $c=$a+$b;
        echo  $c;
    }

    public function sub($a,$b)
    {
        $c=$a-$b;
        echo $c;
    }

    public function mul($a,$b)
    {
        $c=$a*$b;
        echo $c;
    }

    public function div($a,$b)
    {
        $c=$a/$b;
        echo $c;
    }
}

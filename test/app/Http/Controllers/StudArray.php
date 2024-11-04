<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudArray extends Controller
{
    public function displaystud()  
{  
   return view('/student2', ['students'=>['anisha','haseena','akshita','jyotika']]);  
} 

    public function displaywhile($i)
    {
        return view('/student2');  
    }
}

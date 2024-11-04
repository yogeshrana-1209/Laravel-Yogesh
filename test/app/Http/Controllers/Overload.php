<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Overload extends Controller
{
    public function Check($id=null)
    {
        if($id == null)
        {
            echo("You have to Pass the Id");
        }
        else
        {
            echo("Welcome User");
        }
    }
}

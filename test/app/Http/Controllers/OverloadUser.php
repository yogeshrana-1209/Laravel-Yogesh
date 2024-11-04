<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverloadUser extends Controller
{
    //
    public function CheckUser($id=null,$pass=null)
    {
        if($id == null && $pass == null)
        {
            echo("Please enter user id and password");
            //return redirect("/");
        }
        else if($id === "admin" && $pass === "admin")
        {
            echo("Welcome User.....");
        }
        else if($id != "admin" && $pass != "admin")
        {
            echo("Please enter correct user id and password");
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OverloadLogin extends Controller
{
    public function Login($id=null,$pass=null)
    {
        if($id==null && $pass==null)
        {
            echo("Login is required");
        }

        else if($pass==null)
        {
            echo("Password is required");
        }

        else if($id != "admin" || $pass!="admin")
        {
            echo("<h3>");
            echo("You have Entered the Username as $id and ");

            echo("Password as $pass ");
            echo("<br>");
            echo("Wrong Username and Password");
            echo("</h3>");
            echo("<h2 style='color:red';>Please Enter Correct Username and Password</h2>");
        }

        else if($id === "admin" && $pass === "admin")
        {
            echo("<center><h1 style='color:green;'>");
            echo('Welcome User');
            echo("</h1></center");
        }
    }
}

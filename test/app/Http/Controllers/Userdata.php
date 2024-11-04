<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userdata extends Controller
{
    public function Logindata(Request $req)
    {
        $uname = $req->uname;
        $pass = $req->pass;

        if($uname == "admin" && $pass=="admin")
        {
            echo("Welcome User");
        }
        else{
            echo("Invalid User");
            //return redirect('/loginform');
        }
    }
}

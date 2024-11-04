<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBchecklogin extends Controller
{
    function Checklogin(Request $req){

    $uname = $req->uname;
    $pass = $req->pass;

    $records = DB::select('select * from users');

    foreach($records as $records){
        echo($records->name);
       if($records->name == $uname && $records->password == $pass)
            {  
            return redirect('/users',compact('records'));
            }
        else
            {
                return view('/loginform');
            }
        
    }

}
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBsignup extends Controller
{
  
    // function showUsers(){
    //     $records = DB::select('select * from users');
    //     return view('/users',compact('records'));
    // }

    function insertUsers(Request $req){
        $uname = $req->uname;
        $email = $req->email;
        $pass = $req->pass;
    
       // DB::insert('insert into users (name,email,password) values(?,?,?)',[$uname,$email,$pass]);
        DB::insert("insert into users (name,email,password) values('$uname','$email','$pass')");
         echo '<script type="text/JavaScript">  
     alert("Record for User will Inserted Successfully"); 
     </script>' ;
        // echo ("Record for {$uname} user will Inserted Successfully");
            $records = DB::select('select * from users');
            return view('/users',compact('records'));
    }
}

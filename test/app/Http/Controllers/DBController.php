<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    function showUsers(Request $req){
        $records = DB::select('select * from users');
        return view('/users',compact('records'));
    }

    function fetchUsers(Request $req){
        $records = DB::select('select * from users');
        return view('/update',compact('records'));
    }
    // function insertUsers(){
    //     return DB::insert('insert into users (name,email,password) values(?,?,?)',['xyz','xyz@gmail.com','xyz123']);
    // }
    function searchName(Request $req){
            $sname = $req->search_name;
                
            $records = DB::select('select * from users where name="'.$sname.'"');
            return view('/users',compact('records'));    
    }

    function updateUser(Request $req)
    {
        $id = $req->query('id');
        $records = DB::table('users')->where('id',$id)->get();
        return view('update',compact('records'));
    }

    function updatedUser(Request $req)
    {
        $id = $req->input('id');
        $name = $req->input('name');
        $email = $req->input('email');
        $password = $req->input('password');

        $status = DB::table('users')->where('id',$id)->update(['name'=>$name,'email'=>$email,'password'=>$password]);
        $records = DB::table('users')->get();
        return view('users',compact('records'));
    }

    // function deleteUser(Request $req)
    // {
    //     $id = $req->query('id');
    //     $records = DB::table('users')->where('id',$id)->get();
    //     return view('delete',compact('records'));
    // }

    function deletedUser(Request $req)
    {
        $id = $req->input('id');
        echo '<script type="text/JavaScript">  
        alert("Record Deleted Successfully......");
        </script>' ;
        $status = DB::table('users')->where('id',"=",$id)->delete();
        $records = DB::table('users')->get();
        return view('users',compact('records'));
    }
}

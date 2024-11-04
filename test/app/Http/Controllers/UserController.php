<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return "<h1>I am Controller !......</h1>";
    }
    public function userId($id,$name){
        return "<h1>I am Controller, My Id is $id and Name is $name !......</h1>";
    }
}

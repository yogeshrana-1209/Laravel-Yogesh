<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return "test page";
    // return redirect("/");
});

Route::get('/route1/{id}', function ($id) {
    return "Id number is :".$id;
});

Route::get('/route2/{id}/{name}', function ($id,$name) {
    return "Id number is :".$id ." name is :".$name;
});

Route::get('/route3/{name?}', function ($name=null) {
    return $name;
    // return redirect("/");
});

Route::get('/route4/{name?}', function ($name='yogesh') {
    return $name;
    // return redirect("/");
});

Route::get('/route5/{name?}', function ($name=null) {
    return $name;
    // return redirect("/");
})->where('name','[a-zA-Z]+'); 

Route::get('/route6/{id}', function ($id) {
    return "Id number is :".$id;
})->where('id','[0-9]+');

Route::get('/route7/{id}/{name}', function ($id,$name) {
    return "Id number is :".$id ." name is :".$name;
})->where(['id'=>'[0-9]+', 'name'=>'[a-zA-Z]+']); 

Route::get('/gujarat', function () {
    return view('gujarat');
});  

Route::get('/login', function () {
    return view('login');
});

Route::get('/mp', function () {
    return view('mp');
});

Route::get('/up', function () {
    return view('up');
});

Route::get('/rj', function () {
    return view('rj');
});
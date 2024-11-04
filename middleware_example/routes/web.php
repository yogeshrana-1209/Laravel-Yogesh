<?php

use App\Http\Middleware\Authentication;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\LoginCheck;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    echo ("This is Dashboard to access it Login is Required......");
    //return view('dashboard');
});

Route::get('/contact', function () {
    echo ("This is Contact page to access it Login is Required......");
    //return view('contact');
});

Route::get('/about', function () {
    echo ("This is about page to access it Login is Required......");
    //return view('about');
});


Route::get('/dashboard/{uname}/{pass}', function () {
    return view('dashboard');
})->Middleware(LoginCheck::class);

Route::get('/contact/{uname}/{pass}', function () {
    return view('contact');
})->Middleware(LoginCheck::class);

Route::get('/about/{uname}/{pass}', function () {
    return view('about');
})->Middleware(LoginCheck::class);

Route::middleware([Authentication::class])->group(function () {
    Route::get('/user1/{uname}/{pass}', function () {
        return view('user1');
    });
 
    Route::get('/user2/{uname}/{pass}', function () {
        return view('user2');
    })->withoutMiddleware([Authentication::class]);
});
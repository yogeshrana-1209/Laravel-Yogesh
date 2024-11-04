<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserResource;
use App\Http\Controllers\SingleActionController;
use App\Http\Controllers\ArithController;
use App\Http\Controllers\OperationController;
use App\Http\Controllers\Overload;
use App\Http\Controllers\OverloadLogin;
use App\Http\Controllers\Userdata;
use App\Http\Controllers\Student;
use App\Http\Controllers\StudArray;
use App\Http\Controllers\DBController;
use App\Http\Controllers\DBsignup;
use App\Http\Controllers\DBchecklogin;
use App\Http\Controllers\NumberController;
use App\Http\Controllers\SquareController;
use App\Http\Controllers\CubeController;
use App\Http\Controllers\OverloadUser;
use App\Http\Middleware\Vote;
// use App\Http\Middleware\subject;
//use App\Http\Middleware\Globalmiddleware;
// use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/features', function () {
    return view('features');
});

Route::get('/pricing', function () {
    return view('pricing');
});

// Route::get('/voter', function () {
//     return view('voter');
// });

Route::get('/voter', function () {
    return view('voter');
})->Middleware(Vote::class);

// Route::get('/voter', function () {
//     return view('voter');
// })->Middleware('group1');

Route::middleware([Vote::class])->group(function () {
    Route::get('/demo1/{age}', function () {
        return view('demo1');
    });
 
    Route::get('/demo2/{age}', function () {
        return view('demo2');
    })->withoutMiddleware([Vote::class]);
});

// Route::get('/user',[UserController::class,'index']); 
// Route::get('/user/{id}/{name}',[UserController::class,'userId']); 


Route::get('/voter/{age}', function () {
    return view('voter');
})->Middleware(Vote::class);

// Route::get('/voter', function () {
//     return view('Voter');
// })->Middleware(Vote::class);

Route::get('/istar', function () {
    return 'Welcome to ISTAR';
})->name('istar');

Route::get('/mca', function () {
    return view('mca');
})->name('mca');

Route::get('/it', function () {
    return view('it');
})->name('it');

Route::get('/gis', function () {
    return view('gis');
})->name('gis');

//Parameterized Route
Route::get('/yogesh/{id}', function () {
    return view('yogesh');
});

//Parameterized Route
Route::get('/hello/{name}', function ($name) {
    return "Hello, {$name}!";
});


Route::prefix('user')->group(function(){
    Route::get('/view', function () {
        return 'User View page.....';
    });

    Route::get('/insert', function () {
        return 'User Insert page.....';
    });

    Route::get('/update', function () {
        return 'User Update page.....';
    });

    Route::get('/delete', function () {
        return 'User Delete page.....';
    });
});

// Route::get('/features','features');
// Route::get('/pricing','pricing');

//Route::resource('user',UserResource::class);
//Route::get('/server', SingleActionController::class);

// Route::get('/add/{a}/{b}',[ArithController::class,'add']);
// Route::get('/sub/{a}/{b}',[ArithController::class,'sub']);
// Route::get('/mul/{a}/{b}',[ArithController::class,'mul']);
// Route::get('/div/{a}/{b}',[ArithController::class,'div']);

// Route::get('/factorial/{number}', [NumberController::class, 'factorial']);
// Route::get('/sumodd/{number}', [NumberController::class, 'sumOfOddNumbers']);
// Route::get('/sumeven/{number}', [NumberController::class, 'sumOfEvenNumbers']);

// Route::get('/square/{number}', SquareController::class);
// Route::get('/cube/{number}', CubeController::class);

// Route::get('/fact/{n}',[OperationController::class,'factorial']);
// //Route::get('/odd/{n}',[OperationController::class,'sumodd']);
// Route::get('/odd/{n}',[OperationController::class,'sumodd']);

// Route::get('overuser/{id}',[Overload::class,'Check']);
// Route::get('/overuser',[Overload::class,'Check']);

// Route::get('/Overloaduser',[OverloadUser::class,'CheckUser']);
// Route::get('/Overloaduser/{id}/{pass}',[OverloadUser::class,'CheckUser']);

// Route::get('/login',[OverloadLogin::class,'Login']);
// Route::get('/login/{id}/{pass}',[OverloadLogin::class,'Login']);
// Route::get('/login/{pass}',[OverloadLogin::class,'Login']);
// Route::get('/login/{id}',[OverloadLogin::class,'Login']);


// Route::get('/loginform', function () {
//     return view('Loginform');
// });

// Route::post('/loginform',[Userdata::class,'Logindata']);
// Route::post('/loginform',[DBchecklogin::class,'Checklogin']);

Route::view('/template/{id}','bladetemp');

Route::view('/temptitle','bladetitle');

Route::get('/student',[Student::class,'display']);

Route::get('/stud',[StudArray::class,'displaystud']);

//Route::get('/studwhile/{i}',[StudArray::class,'displaywhile']);

//Database related route's
Route::get('/users',[DBController::class,'showUsers']);    
Route::post('/searchName',[DBController::class,'searchName']);
// Route::get('/insertusers',[DBController::class,'insertUsers']);

Route::get('/signup', function () {
    return view('signup');
});

Route::post('/signup',[DBsignup::class,'insertUsers']);
//Route::post('/signup',[DBsignup::class,'insertUsers']);


Route::get('/update',[DBController::class,'updateUser']);
Route::post('/update',[DBController::class,'updatedUser']);

Route::get('/delete',[DBController::class,'deletedUser']);
Route::post('/delete',[DBController::class,'deletedUser']);

//Component with Template Inheritance
Route::get('/home', function () {
    return view('layouts.app');
});

//Template Inheritance master page
// Route::get('/home', function () {  
//     return view('layouts.Home');  
// });  

//Template Inheritance master page & component
Route::get('/about', function () {  
    return view('layouts.About');  
}); 

//Template Inheritance master page & component
Route::get('/contact', function () {  
    return view('layouts.Contact');  
});  
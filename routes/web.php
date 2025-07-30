<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

<<<<<<< HEAD
Route::get('/', function () {
    return view('home');
});

// Route::get('user',[UserController::class,'getName']);
// Route::get('name',[UserController::class,'getUser']);
// Route::get('user/{name}',[UserController::class,'Display']);

// Route::get('about', function () {
//     return view('about');
// });
Route::get('AddUser', [UserController::class, 'AddUser']);
Route::post('AddUser', [UserController::class, 'AddUser']);
=======
// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/',[UserController::class,'getHome']);
Route::get('/about',[UserController::class,'getAbout']);
Route::view('form','user-form');
Route::post('addUser',[UserController::class,'AddUser']);
Route::get('addUser',[UserController::class,'AddUser']);


// Route::get('name',[UserController::class,'getName']);
// // Route::get('name',[UserController::class,'getUser']);
// // Route::get('display',[UserController::class,'Display']);

// Route::get('user', function () {
//     return view('user');
// });

// Route::get('login',[UserController::class,'Adminlogin']);
>>>>>>> 176ad1c (Form action get and post)

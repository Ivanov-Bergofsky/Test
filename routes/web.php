<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create/user/{name}/{email}/{passowrd}',[UserController::class,'store']);
Route::get('/users',[UserController::class,'index']);

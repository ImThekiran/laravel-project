<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


// Route::get('/',[UserController::class,'showUsers']);

Route::get('/',[UserController::class,'showUsers']);

Route::get('/user/{id}',[UserController::class,'singleUser']);


Route::get('/play',[UserController::class,'play']);


Route::get('/add',[UserController::class,'addUser']);

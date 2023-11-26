<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\testController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[pageController::class,'print_message']);
Route::get('/test',testController::class);

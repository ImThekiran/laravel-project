<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(UserController::class)->group(function(){
  Route::get('/','showUsers')->name('home');
  Route::get('/user/{id}','showUser')->name('view.user');
  Route::get('/delete/{id}','deleteUser')->name('delete.user');
  Route::get('/updateUser/{id}','updateUser')->name('update.user');
  Route::post('/updateUserData','updateUserValue')->name('updateValue.user');
  Route::post('/add','addUser')->name('add.user');
});

Route::view('/newUser','/adduser');

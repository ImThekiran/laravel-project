<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});


Route::get('/js', function () {
    return view('jsthing');
});

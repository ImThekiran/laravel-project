<?php

use Illuminate\Support\Facades\Route;



Route::prefix('page')->group(function(){
  Route::get('post',function(){
    return view('home');
  })->name('home');

  Route::get('about',function(){
    return view('about');
  })->name('about');

  Route::get('contact-us1',function(){
    return view('contact');
  })->name('contact');
});


Route::fallback(function(){
  return "<h1>Page not found</h1>";
});


?>

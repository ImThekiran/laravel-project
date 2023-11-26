<?php

use Illuminate\Support\Facades\Route;


function getUsers(){
  return [
    1 => ['name' => 'Amitabh', 'phone' => '9123456789', 'city' =>'Goa'],
    2 => ['name' => 'Salman', 'phone' => '9123456789', 'city' => 'Delhi'],
    3 => ['name' => 'Sunny', 'phone' => '9123456789', 'city' => 'Mumbai'],
    4 => ['name' => 'Akshay', 'phone' => '9123456789', 'city' => 'Agra'],
  ];
}
Route::get('/', function () {
    $names=getUsers();
    return view('welcome',['names'=>$names]);
});

Route::get('/user/{id}', function ($id) {
  $names=getUsers();
  return "<h1>".$names[$id]['name']."</h1>";
})->name('view.user');

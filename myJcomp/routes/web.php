<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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



Route::get('/',[HomeController::class,'redirect']);


Route::get('/ahome',[AdminController::class,'home'])->name('admin.home');
Route::match(['get', 'post'],'/addproduct',[AdminController::class,'uploadproduct'])->name('admin.addproduct');
// Route::post('/updateproduct',[AdminController::class,'updateProduct'])->name('admin.updateproduct');
// Route::get('/orders',[AdminController::class,'showOrders'])->name('admin.orders');
Route::get('/userdetails',[AdminController::class,'showUsers'])->name('admin.users');
Route::get('/messages',[AdminController::class,'showMessages'])->name('admin.messages');
Route::get('/delete_user/{user_id}',[AdminController::class,'deleteuser'])->name('admin.deleteuser');


Route::get('/home',[UserController::class,'home'])->name('user.home');
Route::post('/addtocart',[UserController::class,'addtocart'])->name('addtocart');
Route::get('/aboutus',[UserController::class,'aboutus'])->name('aboutus');
Route::get('/shop',[UserController::class,'shop'])->name('shop');
Route::match(['get', 'post'],'/contactus',[UserController::class,'contactus'])->name('user.contactus');
Route::get('/orders',[UserController::class,'myorders'])->name('orders');

Route::get('/mycart',[UserController::class,'mycart'])->name('cart');
Route::get('/mycart/delete/{prod_id}',[UserController::class,'delete']);
Route::get('/mycart/deleteall',[UserController::class,'deleteall']);
Route::post('/mycart/update_qty',[UserController::class,'update_qty'])->name('update_quantity');

Route::get('/mywishlist',[UserController::class,'mywishlist'])->name('wishlist');
Route::get('/search?/{prod_name}',[UserController::class,'search'])->name('search');







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::fallback(function(){
  return view('welcome');
});

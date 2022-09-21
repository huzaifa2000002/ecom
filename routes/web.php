<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
// use Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::view('/register','register');
Route::get('/register', function () {
    return view('register');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::get('/',[ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::get('myorder',[ProductController::class,'myOrder']);
Route::get('cartList',[ProductController::class,'cartList']);
Route::get('removeCart/{id}',[ProductController::class,'removeCart']);
Route::get('orderNow',[ProductController::class,'orderNow']);
Route::post('add_to_cart',[ProductController::class,'addToCart']);
Route::post('orderplace',[ProductController::class,'orderPlace']);
Route::post('/login',[UserController::class,'login']);
Route::post('/register',[UserController::class,'register']);
// Rizwan
// Shan
// Babar
// Fakhar
// Asif
// Haider
// Nawaz
// Wasim
// Shaheen
// Naseem
// Rauf

// KHUSHDIL
// IFTIKHAR
// IMAD
// SHADAB
// SARFARAZ
// MIR HAMZA
// AZAM
// MALIK

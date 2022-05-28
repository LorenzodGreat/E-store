<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::view('/Login', 'login')->name('login');
Route::view('/Products', 'products')->name('products');
Route::view('/ProductDetails', 'product-detail')->name('product-detail');
Route::view('/Cart', 'cart')->name('cart');
Route::view('/Repairs', 'repairs')->name('repairs');

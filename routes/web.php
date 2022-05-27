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

Route::get('/send_product', function () {
    return view('send_product');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/warehouse', function () {
    return view('warehouse');

});
Route::get('/reduce_product', function () {
    return view('reduce_product');
});
Route::get('/tagihan_cicilan', function () {
    return view('tagihan_cicilan');
});
Route::get('/', function () {
    return view('signin');
});
Route::get('/signups', function () {
    return view('signups');
});

Route::get('/product', function () {
    return view('product');
});
Route::get('/editproduct', function () {
    return view('editproduct');
});
Route::get('/navbar', function () {
    return view('navbar');
});
Route::get('/transaksi', function () {
    return view('tagihan_cicilan');
    
});
Route::get('/insertproduct2', function () {
    return view('insertproduct2');
});
Route::get('/stockopname', function () {
    return view('stockopname');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/addproduct', function () {
    return view('addproduct');
});
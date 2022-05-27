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

Route::get('/sendproduct', function () {
    return view('sendproduct');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/warehouse', function () {
    return view('warehouse');
});

Route::get('/', function () {
    return view('login');
});
Route::get('/reduceproduct', function () {
    return view('reduceproduct');
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
Route::get('/insertproduct', function () {
    return view('insertproduct');
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
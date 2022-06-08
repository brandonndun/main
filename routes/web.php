<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product;
use App\Http\Controllers\signinController;


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

// Route::get('/', function () {
//     return view('login');
// });
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
Route::get('/produk/{kota}','App\Http\Controllers\product@produkkota');
Route::post('/editproduct','App\Http\Controllers\edit@editproduk');
Route::post('/ceksignin','App\Http\Controllers\signinController@signin');
Route::post('/deleteproduk','App\Http\Controllers\delete@deleteproduk');
Route::post('/insertproduk','App\Http\Controllers\insert@insertproduk');

Route::get('/navbar', function () {
    return view('navbar');
});
Route::get('/transaksi', function () {
    return view('tagihan_cicilan');
    
});
Route::get('/insertproduct', function () {
    return view('insertproduct');
});
// Route::get('/stockopname', function () {
//     return view('stockopname');
// });
Route::get('/home', function () {
    return view('home');
});
Route::get('/addproduct', function () {
    return view('addproduct');
});
Route::get('/stockopname','App\Http\Controllers\stockopnameController@tableproduk');

Route::get('/product2', [product::class, 'product']);
Route::post('/edit','App\Http\Controllers\edit@edit');
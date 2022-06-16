<?php

use App\Http\Controllers\add;
use App\Http\Controllers\send;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\product;
use App\Http\Controllers\signinController;
use App\Http\Controllers\reduce1;
use App\Http\Controllers\stockopnameController;
use App\Http\Controllers\tagihan_cicilanController;


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
Route::POST('/sendproduct', 'App\Http\Controllers\send@viewSend');
Route::POST('/sendtopencatatan', 'App\Http\Controllers\send@insert_pencatatan');
// Route::get('/sendproduct', function () {
//     return view('sendproduct');
// });
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
Route::post('/register', 'App\Http\Controllers\signinController@regis');

Route::get('/produk/{kota}','App\Http\Controllers\product@produkkota');
Route::post('/editproduct/{kota}','App\Http\Controllers\edit@editproduk');
Route::post('/ceksignin','App\Http\Controllers\signinController@signin');
Route::post('/deleteproduk/{kota}','App\Http\Controllers\delete@deleteproduk');
Route::post('/insertproduk','App\Http\Controllers\insert@insertproduk');
// Route::post('/product',[reduce::class, 'reduce2']);
Route::post('/product',[reduce1::class,'reduce2']);
Route::get('/reduceproduct/{id}','App\Http\Controllers\reduce1@details');


Route::get('/navbar', function () {
    return view('navbar');
});
Route::get('/transaksi', 'App\Http\Controllers\tagihan_cicilanController@pembelian');
Route::get('/insertproduct', function () {
    return view('insertproduct');
});
// Route::get('/stockopname', function () {
//     return view('stockopname');
// });
Route::get('/home', function () {
    return view('home');
});
Route::POST('/addproduct/{kota}', 'App\Http\Controllers\add@show_add');
Route::get('/stockopname','App\Http\Controllers\stockopnameController@tableproduk');

Route::get('/product', [product::class, 'product']);
Route::post('/edit/{kota}','App\Http\Controllers\edit@edit');
Route::post('/add/{kota}','App\Http\Controllers\add@add');
Route::post('/filter',[stockopnameController::class,'tableproduk']);
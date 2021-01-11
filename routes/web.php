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
    return view('Login.login');
});
	Route::get('/login','ControllerLogin@show')->name('login');
	Route::post('/login/masuk','ControllerLogin@login')->name('masuk');
	Route::get('/logout','ControllerLogin@logout')->name('logout');
	Route::get('/register','ControllerRegister@show')->name('register');
	Route::post('/register/simpan','ControllerRegister@store')->name('store');

Route::group(['middleware'=>'loginmiddleware'],function(){
	Route::get('/order','Controllerorder@show')->name('order');
	Route::get('/payment','Controllerpayment@show')->name('payment');
	Route::post('/payment/simpan','Controllerpayment@store')->name('paymentstore');
	Route::get('/prepaid-balance','ControllerPrepaidBalance@show')->name('prepaid');
	Route::post('/prepaid-balance/simpan','ControllerPrepaidBalance@store')->name('prepaidstore');
	Route::get('/product','Controllerproduct@show')->name('product');
	Route::post('/product/simpan','Controllerproduct@store')->name('productstore');
	Route::get('/success','Controllersuccess@show')->name('success');
});
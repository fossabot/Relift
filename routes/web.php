<?php

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


Route::post('up_img','Tool\\HomeController@uploadTinyImage');

Route::namespace('Home')->group(function (){
	Route::get('/','IndexController@index')->name('home');
	Route::get('user/{name}','IndexController@profile')->name('profile');
	Route::get('auth',function (){
		dd(Auth::user()->toArray());
	});
});

Route::namespace('Auth')->group(function (){
	Route::get('signup','AuthController@signup')->name('reg');
	Route::post('_signup','RegisterController@reg')->name('_reg');
	Route::get('signin','AuthController@signin')->name('login');
	Route::post('_signin','LoginController@login')->name('_login');
	Route::get('logout','AuthController@logout')->name('logout');
});
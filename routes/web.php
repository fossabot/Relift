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

Route::group(['namespace' => 'Home'], function () {
	Route::get('/index.html', 'IndexController@index')->name('home');
	Route::get('/', 'IndexController@index')->name('home');

	Route::get('post/{slug}.html', 'IndexController@post');
	Route::get('user/{name}.html', 'IndexController@user')->name('user');
	Route::get('category/{slug}.html', 'IndexController@category')->name('category');

	Route::get('post/{slug}', 'IndexController@post');
	Route::get('user/{name}', 'IndexController@user');
	Route::get('category/{slug}', 'IndexController@category');

	Route::get('user.html', 'PageController@user');
	Route::get('user', 'PageController@user');
});

Route::group(['namespace' => 'Auth'], function () {
	Route::get('login.html', 'AuthController@signIn');
	Route::get('login', 'AuthController@signIn');
	Route::get('register.html', 'AuthController@signUp');
	Route::get('register', 'AuthController@signUp');
	Route::get('logout.html', 'AuthController@logout');
	Route::get('logout', 'AuthController@logout');
	Route::post('login', 'LoginController@login');
	Route::post('register', 'RegisterController@reg');
});

Route::group(['namespace' => 'Tool'], function () {
	Route::get('vainglory.html', 'VgController@index');
	Route::get('player/{name}', 'VgController@matches');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

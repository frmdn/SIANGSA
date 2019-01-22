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

Route::get('/', function () {
    // return view('welcome');
    return view('webpage.homepage');
});

Route::get('/login', function () {
	return view('webpage.login');
});

Route::get('/daftar', function () {
	return view('webpage.signup');
});

Route::get('/blog', function () {
	return view('webpage.blog');
});

Route::get('/post', function () {
	return view('webpage.post');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

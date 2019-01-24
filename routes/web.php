<?php

Auth::routes();

Route::get('/', function () {
    // return view('welcome');
    return view('webpage.homepage');
});


Route::get('/daftar', function () {
	return view('webpage.signup');
});

Route::post('/daftar','Auth\RegisterController@register');

Route::get('/blog', function () {
	return view('webpage.blog');
});

Route::get('/post', function () {
	return view('webpage.post');
});




Route::get('/home', 'HomeController@index')->name('home');

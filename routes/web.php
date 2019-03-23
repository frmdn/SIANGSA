<?php


// Eksperimen
Route::get('/ex', function () {
    return view('userdashboard.invoice');   
});


Auth::routes();

Route::get('/', function () {
    // return view('welcome');
    return view('webpage.homepage');
});


Route::get('/daftar', function () {
	return view('webpage.signup');
});

Route::post('/daftar','Auth\RegisterController@register');

Route::get('/blog', 'BlogController@index');

Route::get('/post', function () {
	return view('webpage.post');
});
Route::get('/tarif', function () {
	return view('webpage.tarif');
});

Route::get('/langganan', 'TagihanController@index');
Route::get('/invoice', 'TagihanController@invoice');

Route::get('/lapor', 'LaporanController@index');
Route::post('/lapor', 'LaporanController@create');

Route::get('/info', 'BlogController@info');

// Profile User

Route::get('/profile/{id}','UserController@show');

// End Profile User


Route::get('/home', 'HomeController@index')->name('home');

Route::post('/upload', 'UploadController@index');

Route::get('/blogpost/{id}', 'BlogController@show');


// Halaman ADMIN
Route::get('/adminhome', 'AdminController@index')->name('adminhome');

Route::get('/adminlogin', 'Auth\AdminLoginController@showLoginForm')->name('adminlogin');
Route::post('/session', 'Auth\AdminLoginController@login');
Route::post('/adminlogout', 'Auth\AdminLoginController@logout');

Route::get('/adminlistuser/users', 'Admin\UserController@index')->name('adminshowuser');
Route::get('/adminshowuser/{id}', 'Admin\UserController@show');
Route::post('/edituser', 'Admin\UserController@update');
Route::get('/adminlistuser/new','Admin\UserController@newuser')->name('adminshownewuser');
Route::get('/aktifasi/{id}','Admin\UserController@aktifasi');
Route::post('/activate','Admin\UserController@activate');

Route::get('/admincreate', 'AdminController@create'); // this is blank page

Route::get('/adminlaporan', 'Admin\LaporanController@index');

Route::get('/adminposting', 'Admin\BlogController@create');
Route::get('/adminblog', 'Admin\BlogController@index')->name('adminblog');
Route::post('/posting', 'Admin\BlogController@store');



Route::get('/adminuser', 'Admin\AdminController@index')->name('adminuser');
Route::get('/createadmin', 'Admin\AdminController@create');
Route::post('/createadmin', 'Admin\AdminController@store');

Route::get('/tagihan', 'Admin\TagihanController@index')->name('tagihan');
Route::get('/tunggakan', 'Admin\TagihanController@tunggakan');
Route::get('/buattagihan', 'Admin\TagihanController@create');
Route::get('/edittagihan/{id}', 'Admin\TagihanController@show');
Route::post('/pelunasan', 'Admin\TagihanController@pelunasan');
<?php

use Illuminate\Http\Request;


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/blog','Api\BlogController@index');
Route::get('/blog/{id}','Api\BlogController@show');

Route::group(['middleware' => ['cors']], function () {
	Route::post('/register','ApiAuthController@store');
	Route::post('/login','ApiAuthController@signin');
	Route::get('/laporan','Api\LaporanController@index');
	Route::post('/laporan','Api\LaporanController@create');	
	Route::get('/user','Api\UserController@index');
});


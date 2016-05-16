<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', 'FrontController@index');
Route::get('contacto', 'FrontController@contacto');
Route::get('reviews', 'FrontController@reviews');
Route::get('admin', 'FrontController@admin');
Route::get('logout', 'LogController@logout');
Route::get('register', 'FrontController@register');

Route::resource('registerUser', 'UserRegister');

Route::resource('usuario', 'UsuarioController');
Route::resource('log', 'LogController');
Route::resource('genero', 'GeneroController');
Route::resource('movie', 'MovieController');
Route::resource('emails', 'MailController');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');



Route::auth();

Route::get('/home', 'HomeController@index');

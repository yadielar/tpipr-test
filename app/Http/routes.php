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

// Root redirect
Route::get('/', function(){
	return redirect('home');
});

// Home route
Route::get('home', 'Frontend\FrontendController@index');

// Admin route
Route::get('admin', 'Admin\AdminController@index');

// Businesses routes
Route::resource('admin/businesses', 'Admin\BusinessesController');

// Users routes
Route::resource('admin/users', 'Admin\UsersController');

// Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('contacts', 'ContactController');

// Route::resource('admin', 'AdminController');

Route::get('users/core/{id?}','UserController@core');

Route::get('session/get','SessionController@accessSessionData');
Route::get('session/set','SessionController@storeSessionData');
Route::get('session/remove','SessionController@deleteSessionData');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {

	   Route::resource('users', 'UserController');

       });

Route::group(['middleware' => 'assign.guard:admin,admin/login'],function(){
	
	Route::view('/admin', 'admin.index');
});

Route::get('admin/login', 'Auth\LoginController@showAdminLoginForm');
Route::get('/admin/register', 'Auth\RegisterController@showAdminRegisterForm');

Route::post('/admin/login', 'Auth\LoginController@adminLogin');
Route::post('/admin/register', 'Auth\RegisterController@createAdmin');

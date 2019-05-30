<?php


Route::get('/', 'HomeController@showHome')->name('home');

//login & registration

Route::get('/register', 'AuthController@showRegisterForm')->name('register');
Route::post('/register', 'AuthController@processRegister');

Route::get('/login', 'AuthController@showLoginForm')->name('login');
Route::post('/login', 'AuthController@processLogin');

//backend
Route::get('backend','BackendController@showBackend')->name('backend');

Route::resource('category','CategoryController');
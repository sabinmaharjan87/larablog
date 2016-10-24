<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('contact', function(){
	return view('contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
//Route::get('users/register', 'Auth\RegisterController@store');
Route::get('test', function()
{
Mail::send('Email.test', [], function ($message)
{
    $message->to('9ba77d701fb298', 'HisName')->subject('Welcome!');
});
});
Route::get('user/activation/{token}', 'Auth\LoginController@activateUser')->name('user.activate');


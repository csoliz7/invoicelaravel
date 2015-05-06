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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('client','ClientController');

Route::get('/client/create',  ['middleware'=>'auth', 'uses' =>'ClientController@create']);
Route::get('/client/{client}/edit',  ['middleware'=>'auth', 'uses' =>'ClientController@edit']);
Route::get('/client/{client}',  ['middleware'=>'auth', 'uses' =>'ClientController@destroy']);



Route::resource('invoices', 'InvoiceController');
Route::resource('items','ItemController');
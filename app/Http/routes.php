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
Route::get('wel','WelcomeController@wel');
Route::get('pesan', 'WelcomeController@pesan');
Route::get('home', 'HomeController@index');
Route::get('data', 'WelcomeController@data');
Route::get('detail', 'WelcomeController@detail');

Route::get('data',['as'=>'data','uses'=>'kuecontroller@data']);
Route::get('detail',['as'=>'detail','uses'=>'kuecontroller@detail']);
Route::get('edit',['as'=>'detail','uses'=>'kuecontroller@edit']);
Route::get('masukkan',['as'=>'masukkan','uses'=>'kuecontroller@masukkan']);
Route::get('theme',['as'=>'theme','uses'=>'kuecontroller@theme']);
Route::get('pesan', 'kuecontroller@pesan');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route Admin
Route::get('adminh', 'akuecontroller@adminh');
Route::get('laporan', 'akuecontroller@laporan');
Route::get('cirik', 'akuecontroller@cirik');
Route::get('dataa', 'akuecontroller@dataa');
Route::get('mulai', 'akuecontroller@mulai');
Route::get('inputk', 'akuecontroller@inputk');
Route::POST('pesan',['as'=>'pesan','uses'=>'kuecontroller@pesan']);

Route::get('masuk', 'Auth\AuthController@getLogin');
Route::get('logout', 'Auth\AuthController@getLogout');
Route::post('login/ceklogin', 'Auth\AuthController@postLogin');
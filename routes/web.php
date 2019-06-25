<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adressen', 'AdressenController@index');
Route::post('/adressen', 'AdressenController@store');
Route::get('/adressen/create', 'AdressenController@create');
Route::get('/adressen/{adres}/edit', 'AdressenController@edit');
Route::patch('/adressen/{adres}', 'AdressenController@update');
Route::delete('/adressen/{adres}', 'AdressenController@destroy');
Route::get('/adressen/{adres}', 'AdressenController@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

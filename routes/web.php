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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/klub', 'KlubController@index')->name('klub');
Route::get('/klub-data', 'KlubController@get_klub_data')->name('klub_data');
Route::get('/klub/add', 'KlubController@add')->name('klub-add');
Route::get('/skor', 'SkorController@add')->name('skor-add');
Route::post('/klub/insert-klub', 'KlubController@insert')->name('insert-klub');
Route::post('/skor/insert-skor', 'SkorController@insert')->name('insert-skor');
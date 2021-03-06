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

Route::get('/', 'UploadController@create')->name('form');
Route::post('/upload', 'UploadController@upload')->name('upload');
Route::get('/result', 'UploadController@upload')->name('result');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'Apply@index')->name('register');
Route::get('/reassign', 'Apply@close')->name('close');
Route::get('/reassign/{id}', 'Apply@closeReturn')->name('close.return');
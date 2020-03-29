<?php

use Illuminate\Support\Facades\Route;

Route::resource('/errores', 'ErroresController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



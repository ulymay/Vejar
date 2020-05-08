<?php

use Illuminate\Support\Facades\Route;

Route::resource('/categorias', 'CategoryController');

Route::resource('/notas', 'NotaController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





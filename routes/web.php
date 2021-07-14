<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::resource('mis-mascotas', 'MascotaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Mascotas
Route::resource('mis-mascotas', 'MascotaController');

// Solicitudes
Route::get('mis-solicitudes', 'SolicitudeController@create')->name('mis-solicitudes.create');
Route::post('mis-solicitudes', 'SolicitudeController@store')->name('mis-solicitudes.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

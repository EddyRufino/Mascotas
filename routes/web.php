<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// Usuario
Route::get('profile', 'ProfileController@edit')
            ->name('profile.edit');

Route::put('profile', 'ProfileController@update')
            ->name('profile.update');

// Mascotas
Route::resource('mismascotas', 'MascotaController');

// Solicitudes
Route::get('mis-solicitudes', 'SolicitudeController@create')->name('mis-solicitudes.create');
Route::post('mis-solicitudes', 'SolicitudeController@store')->name('mis-solicitudes.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

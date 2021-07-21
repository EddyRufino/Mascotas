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

// Lista Mascotas admin
Route::resource('listadomascotas', 'GenerarqrController')->only(['index', 'show']);

// Search Mascotas admin
Route::get('buscar-mascota', 'search\SearchMascotaController@index')->name('search.mascota');

// Solicitudes
Route::get('mis-solicitudes', 'SolicitudeController@create')->name('mis-solicitudes.create');
Route::post('mis-solicitudes', 'SolicitudeController@store')->name('mis-solicitudes.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

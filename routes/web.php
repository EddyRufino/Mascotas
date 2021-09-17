<?php

// use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// Route::get('/foo', function () {
//     Artisan::call('storage:link');
//     return "Se han vinculado las imágenes";
// });

// Route::get('/clear-cache', function() {
//     $exitCode = Artisan::call('cache:clear');
//     return 'Application cache cleared';
// });

// Route::get('/config-cache', function() {
//     $exitCode = Artisan::call('config:cache');
//     return 'Config cache cleared';
// });

// Luego ir a la direccion dominio/foo
// luego editar dotas las vistas que tienen las imagenes y ponerle la palabra public. Tiene que quedar así: xD
// https://mascotas.municastilla.gob.pe/public/storage/fotos/6XCZZM71wruuGF5I2CGB4CunGGDPCncIPT35uuaq.jpg
// En las vitas pon esto 'https://mascotas.municastilla.gob.pe/public/'.$mascota->foto

Route::view('/', 'welcome');

// Usuario
Route::get('profile', 'ProfileController@edit')
            ->name('profile.edit');

Route::put('profile', 'ProfileController@update')
            ->name('profile.update');

// Mascotas
Route::resource('mismascotas', 'MascotaController');

// Mascotas - Temporales
Route::resource('mimascotas', 'MascotaTemporalesController')->middleware('can:admin');

// Lista Mascotas admin
Route::get('listadomascotas', 'GenerarqrController@index')
    ->name('listadomascotas.index')
    ->middleware('can:admin');

Route::get('listadomascotas/{listadomascota}', 'GenerarqrController@show')
    ->name('listadomascotas.show');

Route::delete('listadomascotas/{listadomascota}', 'GenerarqrController@destroy')
    ->name('listadomascotas.destroy')
    ->middleware('can:admin');

// Search Mascotas admin
Route::get('buscar-mascota', 'search\SearchMascotaController@index')
    ->name('search.mascota')
    ->middleware('can:admin');

// Search Mascotas Temporales admin
Route::get('buscar-mascota-temporal', 'search\SearchMascotaTemporalesController@index')
    ->name('search.mascota.temporal')
    ->middleware('can:admin');

// View Ficha pet
Route::get('ficha-propiedad', 'Report\ReportFileController@index')->name('ficha');
Route::get('genera-pdf-propiedad', 'Report\ReportFileController@pdf')->name('ficha.pdf');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

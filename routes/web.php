<?php

use Illuminate\Support\Facades\Route;

/** FRONTEND **/

/* Inici */
Route::get('/', 'HomeFrontendController@index')->name('frontend.home.index');
/* Empresa */
Route::get('/empresa', 'HomeFrontendController@about')->name('frontend.about.index');

/** END FRONTEND **/

/** BACKEND **/
Auth::routes([
    'register' => false,
    'reset' => false
]);

Route::group(['middleware' => ['auth']], function() {
    /* Inici */
    Route::get('backend/inici', 'HomeBackendController@index')->name('backend.inici.index');
    /* Módulos */
    Route::get('backend/modulos', 'ModuloController@index')->name('backend.modulos.index');
    Route::get('backend/modulos/create', 'ModuloController@create')->name('backend.modulos.create');
    Route::post('backend/modulos', 'ModuloController@store')->name('backend.modulos.store');
    Route::get('backend/modulos/{modulo}/edit', 'ModuloController@edit')->name('backend.modulos.edit');
    Route::put('backend/modulos/{modulo}', 'ModuloController@update')->name('backend.modulos.update');
    Route::delete('backend/modulos/{modulo}', 'ModuloController@destroy')->name('backend.modulos.destroy');
    /* Textes */
    Route::get('backend/textes', 'TexteController@index')->name('backend.textes.index');
    Route::get('backend/textes/create', 'TexteController@create')->name('backend.textes.create');
    Route::post('backend/textes', 'TexteController@store')->name('backend.textes.store');
    Route::get('backend/textes/{texte}/edit', 'TexteController@edit')->name('backend.textes.edit');
    Route::put('backend/textes/{texte}', 'TexteController@update')->name('backend.textes.update');
    Route::delete('backend/textes/{texte}', 'TexteController@destroy')->name('backend.textes.destroy');
});
/** END BACKEND **/




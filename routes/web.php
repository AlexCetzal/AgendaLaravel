<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'index')->name('index');
Route::view('/actividades_Modelo', 'actividades_Modelo')->name('actividades_Modelo');
Route::view('/centro_cultural', 'centro_cultural')->name('centro_cultural');
Route::view('/campos_Modelo', 'campos_Modelo')->name('campos_Modelo');
Route::view('/transporte', 'transporte')->name('transporte');

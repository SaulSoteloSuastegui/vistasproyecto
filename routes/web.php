<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/


Route::view('/', 'welcome')->name('welcome');


Route::view('solicitud', 'solicitud.presolicitud')->name('presolicitud.blade');
Route::view('solicitud/crear', 'solicitud.crear')->name('solicitud.crear');


Route::view('carpeta', 'precarpeta.blade')->name('precarpeta.blade');
Route::view('carpeta/crear', 'carpeta.crear')->name('carpeta.crear');
Route::view('carpeta/consulta', 'carpeta.consulta')->name('carpeta.consulta');
Route::view('carpeta/consulta2', 'carpeta.consulta2')->name('carpeta.consulta2');
Route::view('carpeta/editar', 'carpeta.editar')->name('carpeta.editar');


Route::view('audiencia/crear', 'audiencia.crear')->name('audiencia.crear');
Route::view('audiencia/editar', 'audiencia.editar')->name('audiencia.editar');


Route::view('documento/crear', 'documento.crear')->name('documento.crear');
Route::view('documento/editar', 'documento.editar')->name('documento.editar');

Route::view('integrante/crear', 'integrante.crear')->name('integrante.crear');
Route::view('integrante/editar', 'integrante.editar')->name('integrante.editar');

Route::view('delito/delitoinputado', 'delito.delitoinputado')->name('delito.delitoinputado');
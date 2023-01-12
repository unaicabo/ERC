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
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/principal', function () {
    return view('principal');
});
Route::get('/explicacion', function () {
    return view('ExplicacionExtorsionDelComercio');
});
Route::get('/BuscaLetra', function () {
    return view('BuscaLetras');
});
Route::get('/Acertijo', function () {
    return view('Acertijo');
});
Route::get('/crearGrupos', function () {
    return view('CrearGrupo');
});

Route::get('/vue', function () {
    return view('vue');
});

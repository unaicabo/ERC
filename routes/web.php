<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrimeraPrueba;

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
Route::get('/sopadeletras', function () {
    return view('SopaDeLetras');
});

Route::get('/vue', function () {
    return view('vue');
});



Route::get('/PrimeraPrueba', function () {
    return view('PrimeraPrueba');
});

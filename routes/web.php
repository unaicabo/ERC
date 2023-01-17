<?php

use App\Http\Controllers\UsuarioController;
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
})->name('explicacion');
Route::get('/buscarletra', function () {
    return view('BuscaLetras');
});

Route::get('/acertijo', function () {
    return view('Acertijo');
})->name('acertijo');

Route::get('/sopadeletras', function () {
    return view('SopaDeLetras');
});


Route::get('/vue', function () {
    return view('vue');
});
Route::get('/sopadeletras', function () {
    return view('SopaDeLetras');
});



Route::get('/pruebaDos', function () {
    return view('Cuestionario');
});

Route::get('/pruebaCuatro', function () {
    return view('PruebaCuatro');
});
Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/login', [UsuarioController::class, 'ventanaLogin'])->name('usuarios.ventanaLogin');
Route::post('/register', [UsuarioController::class, 'store'])->name('usuarios.store');
Route::post('/login', [UsuarioController::class, 'login'])->name('usuarios.login');
Route::get('/logout', [UsuarioController::class, 'logout'])->name('usuarios.logout');

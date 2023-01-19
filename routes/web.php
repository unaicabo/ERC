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
})->name('index');
Route::get('/principal', function () {
    return view('principal');
})->middleware('auth')->name('principal');
Route::get('/explicacion', function () {
    return view('ExplicacionExtorsionDelComercio');
})->name('explicacion');
Route::get('/BuscaLetra', function () {
    return view('BuscaLetras');
});
Route::get('/Acertijo', function () {
    return view('Acertijo');
})->name('acertijo');

Route::get('/IVA', function () {
    return view('IVA');
})->middleware('auth')->name('IVA');
Route::get('/CodBarras', function () {
    return view('CodBarras');
})->middleware('auth')->name('codBarras');
Route::get('/Puzle', function () {
    return view('Puzle');
})->middleware('auth')->name('puzle');


Route::get('/pruebaDos', function () {
    return view('Cuestionario');
});

Route::get('/pruebaCuatro', function () {
    return view('PruebaCuatro');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/perfil', function () {
    return view('perfil');
})->middleware('auth');

Route::post('/register', [UsuarioController::class, 'create'])->name('usuarios.store');
Route::post('/login', [UsuarioController::class, 'login'])->name('usuarios.login');
Route::get('/logout', [UsuarioController::class, 'logout'])->name('usuarios.logout');
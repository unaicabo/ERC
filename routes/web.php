<?php

use App\Http\Controllers\PruebasController;
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
    return view('principal');
})->name('principal');
Route::get('/explicacion', function () {
    return view('ExplicacionExtorsionDelComercio');
})->middleware('auth')->name('explicacion');

Route::get('/iniciarPrueba', [PruebasController::class, 'iniciarPrueba'])
    ->name('iniciarPrueba');

Route::get('/IVA', function () {
    return view('IVA');
})->middleware('auth')->name('IVA');
Route::get('/CodBarras', function () {
    return view('CodBarras');
})->middleware('auth')->name('codBarras');
Route::get('/Puzle', function () {
    return view('Puzle');
})->middleware('auth')->name('puzle');
Route::get('/Factura', function () {
    return view('Factura');
})->middleware('auth')->name('factura');

Route::get('/sopadeletrasdemo', function () {
    return view('SopaDeLetrasDemo');
})->name('sopadeletrasdemo');

Route::get('/buscarletrademo', function () {
    return view('BuscaLetrasDemo');
})->name('buscarletrademo');

Route::get('/usuarios', [UsuarioController::class, 'index'])
->middleware('auth')->name('perfil');

Route::get('/crearGrupos',[UsuarioController::class, 'listarUsuarios'])->middleware('auth')->name('CrearGrupo');

Route::get('/buscarletra', function () {
    return view('BuscaLetras');
})->middleware('auth')->name('buscarletra');

Route::get('/acertijo', function () {
    return view('Acertijo');
})->middleware('auth')->name('acertijo');

Route::get('/sopadeletras', function () {
    return view('SopaDeLetras');
})->middleware('auth')->name('sopadeletras');

Route::get('/cuestionario', function () {
    return view('Cuestionario');
})->middleware('auth')->name('cuestionario');

Route::get('/finalScape', function () {
    return view('FinalScape');
})->middleware('auth')->name('finalScape');


Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/perfil', function () {
    return view('perfil');
})->middleware('auth')->name('perfil');

Route::get('/crearProfesor', [UsuarioController::class, 'validarPaginaCrearProfesor']
)->middleware('auth');
Route::post('/crearProfesor', [UsuarioController::class, 'crearProfesor'])->name('crearProfesor');
Route::get('/finpartida', [PruebasController::class, 'acabarPartida'])->middleware('auth')->name('finpartida');

Route::post('/register', [UsuarioController::class, 'create'])->name('usuarios.store');
Route::post('/login', [UsuarioController::class, 'login'])->name('usuarios.login');
Route::get('/logout', [UsuarioController::class, 'logout'])->name('usuarios.logout');
Route::get('/destroy', [UsuarioController::class, 'destroy'])->name('eliminar');

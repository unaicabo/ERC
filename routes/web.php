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
    return view('index');
})->name('index');
Route::get('/principal', function () {
    return view('principal');
})->middleware('auth')->name('principal');
Route::get('/explicacion', function () {
    return view('ExplicacionExtorsionDelComercio');
})->name('explicacion');

Route::get('/iniciarBasica', [PruebasController::class, 'iniciarBasica'])
    ->name('iniciarBasica');

Route::get('/IVA', function () {
    return view('IVA');
})->middleware('auth')->name('IVA');
Route::get('/CodBarras', function () {
    return view('CodBarras');
})->middleware('auth')->name('codBarras');
Route::get('/Puzle', function () {
    return view('Puzle');
})->middleware('auth')->name('puzle');
// Route::get('/crearGrupos', function () {
//     return view('CrearGrupo');
// });

Route::get('/usuarios', [UsuarioController::class, 'index'])
->middleware('auth')->name('perfil');

Route::get('/crearGrupos',  function () {
    return view('CrearGrupo');
})->name('CrearGrupo');

Route::get('/buscarletra', function () {
    return view('BuscaLetras');
})->middleware('auth')->name('buscarletra');

Route::get('/acertijo', function () {
    return view('Acertijo');
})->name('acertijo');

Route::get('/sopadeletras', function () {
    return view('SopaDeLetras');
})->middleware('auth')->name('sopadeletras');

Route::get('/cuestionario', function () {
    return view('Cuestionario');
})->middleware('auth')->name('cuestionario');


Route::get('/vue', function () {
    return view('vue');
 });


Route::get('/pruebaCuatro', function () {
    return view('PruebaCuatro');
});
Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/perfil', function () {
    return view('perfil');
})->middleware('auth');

Route::get('/crearProfesor', [UsuarioController::class, 'validarPaginaCrearProfesor']
)->middleware('auth');
Route::post('/crearProfesor', [UsuarioController::class, 'crearProfesor'])->name('crearProfesor');

Route::post('/register', [UsuarioController::class, 'create'])->name('usuarios.store');
Route::post('/login', [UsuarioController::class, 'login'])->name('usuarios.login');
Route::get('/logout', [UsuarioController::class, 'logout'])->name('usuarios.logout');

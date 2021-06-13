<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\AlumnoController;
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
    return view('welcome');
})->name( 'Bienvenido');
// Rutas de Alumno
Route::get('/alumno/index', [AlumnoController::class,'index'])->name('alumno.index');

Route::get('/alumno/create', [AlumnoController::class,'create'])->name('alumno.create');
Route::post('/alumno', [AlumnoController::class,'createdata'])->name('alumno.crear');
Route::get('/alumno/mostrar',[AlumnoController::class,'index'])->name('alumno/mostrar');
Route::get('/alumno/registro',function () {return view('alumno.formulario');})->name('alumno/formulario');

// Rutas de Genero
Route::get('/genero/index', [GeneroController::class,'index'])->name('genero.index');

Route::get('/genero/mostrar',[GeneroController::class,'index'])->name('genero/mostrar');
Route::post('/genero',[GeneroController::class,'createdata'])->name('genero.crear');
Route::get('/genero/registro',function () {return view('genero.formulario');})->name('genero/formulario');


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
    return view('welcome');
})->name('index');

Route::get('/descubriendo', function () {
    return view('scout.descubriendo');
})->name('descubriendo');

Route::get('/preinscripcion', function () {
    return view('scout.preinscripcion');
})->name('preinscripcion');

Route::get('/metodo', function () {
    return view('scout.metodo');
})->name('metodo');

Route::get('/nosotros', function () {
    return view('scout.sobre-nosotros');
})->name('nosotros');

Route::get('/secciones', function () {
    return view('scout.secciones');
})->name('secciones');

Route::post('preinscripcion/guardar',[\App\Http\Controllers\PreinscripciónController::class, 'store'])->name('preinscripcion.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::middleware(['auth:sanctum', 'verified'])->get('/register', function () {
//     return view('auth.register');
// })->name('register');

Route::middleware(['auth:sanctum', 'verified'])->get('/campamentos', function () {
    return view('scout.administracion.campamentos');
})->name('campamentos');

Route::middleware(['auth:sanctum', 'verified'])->get('/preinscripciones', function () {
    return view('scout.administracion.preinscripciones');
})->name('preinscripciones');

Route::middleware(['auth:sanctum', 'verified'])->get('/materiales', function () {
    return view('scout.administracion.materiales');
})->name('materiales');

Route::middleware(['auth:sanctum', 'verified'])->get('/socios', function () {
    return view('scout.administracion.socios');
})->name('socios');

Route::middleware(['auth:sanctum', 'verified'])->get('/tutores', function () {
    return view('scout.administracion.tutores');
})->name('tutores');

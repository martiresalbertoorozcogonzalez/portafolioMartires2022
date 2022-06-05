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
});

Auth::routes(['verify' => true]);

// Ruta hacia el admin del portafolio
Route::get('/portafolio/admin', [App\Http\Controllers\PortafolioAdminController::class, 'index'])->name('portafolio.admin');

// Rutas para el CRUD de Portafolio
Route::get('/portafolio/index', [App\Http\Controllers\PortafolioController::class, 'index'])->name('portafolio.home');

Route::get('/portafolio/create', [App\Http\Controllers\PortafolioController::class, 'create'])->name('portafolio.create');

Route::post('/portafolio', [App\Http\Controllers\PortafolioController::class, 'store'])->name('portafolio.store');

Route::get('/portafolio/{portafolio}/edit', [App\Http\Controllers\PortafolioController::class, 'edit'])->name('portafolio.edit');

Route::put('/portafolio/{portafolio}',[App\Http\Controllers\PortafolioController::class, 'update'])->name('portafolio.update');

Route::delete('/portafolio/{portafolio}',[App\Http\Controllers\PortafolioController::class, 'destroy'])->name('portafolio.delete');
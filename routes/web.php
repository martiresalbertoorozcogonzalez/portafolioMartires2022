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

Route::get('/portafolio/admin', [App\Http\Controllers\PortafolioAdminController::class, 'index'])->name('portafolio.admin');

Route::get('/portafolio/index', [App\Http\Controllers\PortafolioController::class, 'index'])->name('portafolio.admin');

Route::get('/portafolio/create', [App\Http\Controllers\PortafolioController::class, 'create'])->name('portafolio.create');

Route::get('/portafolio/edit', [App\Http\Controllers\PortafolioController::class, 'edit'])->name('portafolio.edit');

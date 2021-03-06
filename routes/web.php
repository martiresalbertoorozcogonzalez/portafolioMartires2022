<?php

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
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

//Ruta para el Frontend de la pagina
Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('front-end');

//Rutas para mostrar en detalle las certificaciones
Route::get('/frontcertificaciones.show/{certificaciones}', [App\Http\Controllers\FrontendController::class, 'show'])->name('frontcertificaiones-show');

Auth::routes(['verify' => true]);


//Rutas para contacto 
Route::post('contacto', [App\Http\Controllers\MailController::class, 'store'])->name('contacto');


//Ruta para el Crud de Acerca de mi
Route::get('/acercademi/index', [App\Http\Controllers\AcercademiController::class, 'index'])->name('acercademi.index');

Route::get('/acercademi/create', [App\Http\Controllers\AcercademiController::class, 'create'])->name('acercademi.create');

Route::post('/acercademi', [App\Http\Controllers\AcercademiController::class, 'store'])->name('acercademi.store');

Route::get('/acercademi/{acercademi}/edit', [App\Http\Controllers\AcercademiController::class, 'edit'])->name('acercademi.edit');

Route::put('/acercademi/{acercademi}',[App\Http\Controllers\AcercademiController::class, 'update'])->name('acercademi.update');

Route::delete('/acercademi/{acercademi}',[App\Http\Controllers\AcercademiController::class, 'destroy'])->name('acercademi.delete');


// Ruta hacia el admin del portafolio
Route::get('/portafolio/admin', [App\Http\Controllers\PortafolioAdminController::class, 'index'])->name('portafolio.admin');

// Rutas para el CRUD de Portafolio
Route::get('/portafolio/index', [App\Http\Controllers\PortafolioController::class, 'index'])->name('portafolio.index');

Route::get('/portafolio/create', [App\Http\Controllers\PortafolioController::class, 'create'])->name('portafolio.create');

Route::post('/portafolio', [App\Http\Controllers\PortafolioController::class, 'store'])->name('portafolio.store');

Route::get('/portafolio/{portafolio}/edit', [App\Http\Controllers\PortafolioController::class, 'edit'])->name('portafolio.edit');

Route::put('/portafolio/{portafolio}',[App\Http\Controllers\PortafolioController::class, 'update'])->name('portafolio.update');

Route::delete('/portafolio/{portafolio}',[App\Http\Controllers\PortafolioController::class, 'destroy'])->name('portafolio.delete');


//Rutas para el crud de Certificaciones
Route::get('/certificaciones/index', [App\Http\Controllers\CertificacionesController::class, 'index'])->name('certificaciones.index');

Route::get('/certificaciones/create', [App\Http\Controllers\CertificacionesController::class, 'create'])->name('certificaciones.create');

Route::post('/certificaciones', [App\Http\Controllers\CertificacionesController::class, 'store'])->name('certificaciones.store');

Route::get('/certificaciones/{certificaciones}/edit', [App\Http\Controllers\CertificacionesController::class, 'edit'])->name('certificaciones.edit');

Route::put('/certificaciones/{certificaciones}',[App\Http\Controllers\CertificacionesController::class, 'update'])->name('certificaciones.update');

Route::delete('/certificaciones/{certificaciones}',[App\Http\Controllers\CertificacionesController::class, 'destroy'])->name('certificaciones.delete');


// Route::get('message', function(){
        
//        $correo = new TestMail;
//        Mail::to('martiresalbertoorozcogonzalez@gmail.com')->send($correo);

//        return "Se ha enviado el mensaje";

// })->name('messages');





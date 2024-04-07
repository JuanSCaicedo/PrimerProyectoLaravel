<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use App\Mail\ContactanosMailable;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('inicio');

route::resource('cursos', CursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/home', [HomeController::class, 'home'])->name('home')->middleware('auth');

// Definir rutas de autenticación y verificación de correo electrónico
//Auth::routes(['verify' => true]);

// Route::get('contactanos', function () {

//     Mail::to('sebanchit@gmail.com')->send(new ContactanosMailable);

//     return 'Mensaje enviado';

// })->name('contactanos');
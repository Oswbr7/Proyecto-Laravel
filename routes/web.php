<?php

use App\Http\Controllers\ContactanosController;
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

Auth::routes();

Route::get('maestros/pdf', [App\Http\Controllers\MaestroController::class, 'pdf'])->name('maestros.pdf');
Route::get('alumnos/pdf', [App\Http\Controllers\AlumnoController::class, 'pdf'])->name('alumnos.pdf');


Route::resource('clases', App\Http\Controllers\ClaseController::class)->middleware('auth');
Route::resource('maestros', App\Http\Controllers\MaestroController::class)->middleware('auth');
Route::resource('alumnos', App\Http\Controllers\AlumnoController::class)->middleware('auth');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');
Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

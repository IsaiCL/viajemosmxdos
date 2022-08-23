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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('tours', App\Http\Controllers\TourController::class)->middleware('auth');
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');

//Rutas hacia las vistas estáticas de: Eventos, Mapa e Información
Route::middleware(['auth:sanctum', 'verified'])->get('/events', function () {

    return view('events');
})->name('events');

Route::middleware(['auth:sanctum', 'verified'])->get('/map', function () {

    return view('map');
})->name('map');

Route::middleware(['auth:sanctum', 'verified'])->get('/info', function () {

    return view('info');
})->name('info');

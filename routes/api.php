<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
use App\Http\Controllers\api\eventosController;

Route::middleware('auth')->group(function () {
    Route::get('/eventos', [eventosController::class, 'index'])->name('eventos.index');
    Route::get('/eventos/create', [eventosController::class, 'create'])->name('eventos.create');
    Route::post('/eventos', [eventosController::class, 'store'])->name('eventos.store');
    Route::get('/eventos/{id}', [eventosController::class, 'show'])->name('eventos.show');
    Route::get('/eventos/{id}/edit', [eventosController::class, 'edit'])->name('eventos.edit');
    Route::put('/eventos/{id}', [eventosController::class, 'update'])->name('eventos.update');
    Route::delete('/eventos/{id}', [eventosController::class, 'destroy'])->name('eventos.destroy');
});

use App\Http\Controllers\api\artistasController;

Route::middleware('auth')->group(function () {
    Route::get('/artistas', [artistasController::class, 'index'])->name('artistas.index');
    Route::get('/artistas/create', [artistasController::class, 'create'])->name('artistas.create');
    Route::post('/artistas', [artistasController::class, 'store'])->name('artistas.store');
    Route::get('/artistas/{id}', [artistasController::class, 'show'])->name('artistas.show');
    Route::get('/artistas/{id}/edit', [artistasController::class, 'edit'])->name('artistas.edit');
    Route::put('/artistas/{id}', [artistasController::class, 'update'])->name('artistas.update');
    Route::delete('/artistas/{id}', [artistasController::class, 'destroy'])->name('artistas.destroy');
});

use App\Http\Controllers\api\locacionesController;

Route::middleware('auth')->group(function () {
    Route::get('/locaciones', [locacionesController::class, 'index'])->name('locaciones.index');
    Route::get('/locaciones/create', [locacionesController::class, 'create'])->name('locaciones.create');
    Route::post('/locaciones', [locacionesController::class, 'store'])->name('locaciones.store');
    Route::get('/locaciones/{id}', [locacionesController::class, 'show'])->name('locaciones.show');
    Route::get('/locaciones/{id}/edit', [locacionesController::class, 'edit'])->name('locaciones.edit');
    Route::put('/locaciones/{id}', [locacionesController::class, 'update'])->name('locaciones.update');
    Route::delete('/locaciones/{id}', [locacionesController::class, 'destroy'])->name('locaciones.destroy');
});

use App\Http\Controllers\api\boletosController;

Route::middleware('auth')->group(function () {
    Route::get('/boletos', [boletosController::class, 'index'])->name('boletos.index');
    Route::get('/boletos/create', [boletosController::class, 'create'])->name('boletos.create');
    Route::post('/boletos', [boletosController::class, 'store'])->name('boletos.store');
    Route::get('/boletos/{id}', [boletosController::class, 'show'])->name('boletos.show');
    Route::get('/boletos/{id}/edit', [boletosController::class, 'edit'])->name('boletos.edit');
    Route::put('/boletos/{id}', [boletosController::class, 'update'])->name('boletos.update');
    Route::delete('/boletos/{id}', [boletosController::class, 'destroy'])->name('boletos.destroy');
});

use App\Http\Controllers\api\ventasController;

Route::middleware('auth')->group(function () {
    Route::get('/ventas', [ventasController::class, 'index'])->name('ventas.index');
    Route::get('/ventas/create', [ventasController::class, 'create'])->name('ventas.create');
    Route::post('/ventas', [ventasController::class, 'store'])->name('ventas.store');
    Route::get('/ventas/{id}', [ventasController::class, 'show'])->name('ventas.show');
    Route::get('/ventas/{id}/edit', [ventasController::class, 'edit'])->name('ventas.edit');
    Route::put('/ventas/{id}', [ventasController::class, 'update'])->name('ventas.update');
    Route::delete('/ventas/{id}', [ventasController::class, 'destroy'])->name('ventas.destroy');
});

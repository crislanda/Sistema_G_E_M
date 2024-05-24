<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::get('/eventos', [eventosController::class, 'index'])->name('eventos.index');
    Route::get('/eventos/create', [eventosController::class, 'create'])->name('eventos.create');
    Route::post('/eventos', [eventosController::class, 'store'])->name('eventos.store');
   // Route::get('/eventos/{eventos}', [eventosController::class, 'show'])->name('eventos.show');
    Route::get('/eventos/{eventos}/edit', [eventosController::class, 'edit'])->name('eventos.edit');
    Route::put('/eventos/{eventos}', [eventosController::class, 'update'])->name('eventos.update');
    Route::delete('/eventos/{eventos}', [eventosController::class, 'destroy'])->name('eventos.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/artistas', [artistasController::class, 'index'])->name('artistas.index');
    Route::get('/artistas/create', [artistasController::class, 'create'])->name('artistas.create');
    Route::post('/artistas', [artistasController::class, 'store'])->name('artistas.store');
    //Route::get('/artistas/{artistas}', [artistasController::class, 'show'])->name('artistas.show');
    Route::get('/artistas/{artistas}/edit', [artistasController::class, 'edit'])->name('artistas.edit');
    Route::put('/artistas/{artistas}', [artistasController::class, 'update'])->name('artistas.update');
    Route::delete('/artistas/{artistas}', [artistasController::class, 'destroy'])->name('artistas.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/locaciones', [locacionesController::class, 'index'])->name('locaciones.index');
    Route::get('/locaciones/create', [locacionesController::class, 'create'])->name('locaciones.create');
    Route::post('/locaciones', [locacionesController::class, 'store'])->name('locaciones.store');
    //Route::get('/locaciones/{locaciones}', [locacionesController::class, 'show'])->name('locaciones.show');
    Route::get('/locaciones/{locaciones}/edit', [locacionesController::class, 'edit'])->name('locaciones.edit');
    Route::put('/locaciones/{locaciones}', [locacionesController::class, 'update'])->name('locaciones.update');
    Route::delete('/locaciones/{locaciones}', [locacionesController::class, 'destroy'])->name('locaciones.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/boletos', [boletosController::class, 'index'])->name('boletos.index');
    Route::get('/boletos/create', [boletosController::class, 'create'])->name('boletos.create');
    Route::post('/boletos', [boletosController::class, 'store'])->name('boletos.store');
    //Route::get('/boletos/{boletos}', [boletosController::class, 'show'])->name('boletos.show');
    Route::get('/boletos/{boletos}/edit', [boletosController::class, 'edit'])->name('boletos.edit');
    Route::put('/boletos/{boletos}', [boletosController::class, 'update'])->name('boletos.update');
    Route::delete('/boletos/{boletos}', [boletosController::class, 'destroy'])->name('boletos.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/ventas', [ventasController::class, 'index'])->name('ventas.index');
    Route::get('/ventas/create', [ventasController::class, 'create'])->name('ventas.create');
    Route::post('/ventas', [ventasController::class, 'store'])->name('ventas.store');
    //Route::get('/ventas/{ventas}', [ventasController::class, 'show'])->name('ventas.show');
    Route::get('/ventas/{ventas}/edit', [ventasController::class, 'edit'])->name('ventas.edit');
    Route::put('/ventas/{ventas}', [ventasController::class, 'update'])->name('ventas.update');
    Route::delete('/ventas/{ventas}', [ventasController::class, 'destroy'])->name('ventas.destroy');
});

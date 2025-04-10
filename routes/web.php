<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductoCategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use Inertia\Inertia;




Route::get('/', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('/');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/home', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('home');


Route::resource('producto', ProductoController::class);
Route::resource('categoria', ProductoCategoriaController::class);
Route::resource('proveedor', ProveedorController::class);



require __DIR__.'/settings.php';
require __DIR__.'/auth.php';

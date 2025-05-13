<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuiController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth.session'])->group(function () {
    Route::get('/inicio', function () {
        return view('inicio');
    })->name('inicio');
});

Route::get('/buscar', [CuiController::class, 'showBuscar'])->name('buscar.form');
Route::post('/buscar', [CuiController::class, 'buscar'])->name('buscar.cui');
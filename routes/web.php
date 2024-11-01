<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

// Rutas de autenticacion
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Proteger las rutas del CRUD de usuarios no ingresados
Route::middleware(['auth'])->group(function () {
    //rutas de metodos UserController
    Route::resource('users', UserController::class);
});

Route::get('/', function () {
    return redirect()->route('login');
});

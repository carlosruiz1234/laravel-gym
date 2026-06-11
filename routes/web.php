<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MembresiaController;
use App\Http\Controllers\RutinaPersonalizadaController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->get('/dashboard', function () {
    if (auth()->user()->hasRole('admin')) {
        return redirect('/admin/dashboard');
    }
    return redirect('/user/dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/admin/usuarios', [AdminController::class, 'usuarios']);
    Route::get('/admin/membresias', [MembresiaController::class, 'index']);
    Route::get('/admin/membresias/{id}/edit', [MembresiaController::class, 'edit']);
    Route::put('/admin/membresias/{id}', [MembresiaController::class, 'update']);
    Route::get('/admin/clases', [AdminController::class, 'clases']);
    
    Route::get('/admin/clases/crear', [AdminController::class, 'crearClase']);
    Route::post('/admin/clases', [AdminController::class, 'guardarClase']);
    Route::get('/admin/clases/{id}/edit', [AdminController::class, 'editarClase']);
    Route::put('/admin/clases/{id}', [AdminController::class, 'actualizarClase']);
    Route::delete('/admin/clases/{id}', [AdminController::class, 'eliminarClase']);
});

Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'dashboard']);
    Route::get('/user/clases', [UserController::class, 'clases']);
    Route::get('/user/membresia', [UserController::class, 'membresia']);
    Route::get('/user/rutina', [UserController::class, 'rutina']);
    Route::get('/user/membresias', [MembresiaController::class, 'verMembresias']);
    Route::post('/user/membresia/{id}', [UserController::class, 'elegirMembresia']);

    Route::get('/user/membresia/{id}/pago', [UserController::class, 'verPago']);
    Route::post('/user/membresia/{id}/pago', [UserController::class, 'procesarPago']);  
    Route::get('/user/rutinas-personalizadas', [RutinaPersonalizadaController::class, 'index']);
    Route::get('/user/rutinas-personalizadas/crear', [RutinaPersonalizadaController::class, 'crear']);
    Route::post('/user/rutinas-personalizadas', [RutinaPersonalizadaController::class, 'guardar']);
    Route::get('/user/rutinas-personalizadas/{id}/edit', [RutinaPersonalizadaController::class, 'editar']);
    Route::put('/user/rutinas-personalizadas/{id}', [RutinaPersonalizadaController::class, 'actualizar']);
    Route::delete('/user/rutinas-personalizadas/{id}', [RutinaPersonalizadaController::class, 'eliminar']);
});
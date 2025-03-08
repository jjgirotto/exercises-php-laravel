<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;
use App\Http\Controllers\RespostasController;

Route::get('/ex1', [ExerciciosController::class, 'abrirEx1']);
Route::post('ex1resp', [RespostasController::class, 'calcularEx1']);

Route::get('/ex2', [ExerciciosController::class, 'abrirEx2']);
Route::post('ex2resp', [RespostasController::class, 'calcularEx2']);

Route::get('/ex3', [ExerciciosController::class, 'abrirEx3']);
Route::post('ex3resp', [RespostasController::class, 'calcularEx3']);

Route::get('/ex4', [ExerciciosController::class, 'abrirEx4']);
Route::post('ex4resp', [RespostasController::class, 'calcularEx4']);

Route::get('/ex5', [ExerciciosController::class, 'abrirEx5']);
Route::post('ex5resp', [RespostasController::class, 'calcularEx5']);

Route::get('/ex6', [ExerciciosController::class, 'abrirEx6']);
Route::post('ex6resp', [RespostasController::class, 'calcularEx6']);

Route::get('/ex7', [ExerciciosController::class, 'abrirEx7']);
Route::post('ex7resp', [RespostasController::class, 'calcularEx7']);

Route::get('/ex8', [ExerciciosController::class, 'abrirEx8']);
Route::post('ex8resp', [RespostasController::class, 'calcularEx8']);

Route::get('/ex9', [ExerciciosController::class, 'abrirEx9']);
Route::post('ex9resp', [RespostasController::class, 'calcularEx9']);

Route::get('/ex10', [ExerciciosController::class, 'abrirEx10']);
Route::post('ex10resp', [RespostasController::class, 'calcularEx10']);
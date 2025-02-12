<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bemvindo', function () {
    return "Seja bem vindo!";
});

Route::get('/ex1', function () {
    return view('ex1');
});

Route::post('ex1resp', function(Request $request) {
    $valor1 = intval($request->input('valor1'));
    $valor2 = intval($request->input('valor2'));
    $soma = $valor1 + $valor2;
    return view('ex1', compact('soma'));
});
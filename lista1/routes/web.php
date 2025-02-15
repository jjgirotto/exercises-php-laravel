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
    $valor1 = floatval($request->input('valor1'));
    $valor2 = floatval($request->input('valor2'));
    $valor3 = floatval($request->input('valor3'));
    $media = ($valor1 + $valor2 + $valor3) / 3;
    return view('ex1', compact('media'));
});

Route::get('/ex2', function () {
    return view('ex2');
});
Route::post('ex2resp', function(Request $request) {
    $celsius = intval($request->input('celsius'));
    $temp = $celsius * 1.8 + 32;
    return view('ex2', compact('temp'));
});

Route::get('/ex3', function () {
    return view('ex3');
});
Route::post('ex3resp', function(Request $request) {
    $temp = intval($request->input('temp'));
    $celsius = ($temp - 32) / 1.8;
    return view('ex3', compact('celsius'));
});

Route::get('/ex4', function () {
    return view('ex4');
});
Route::post('ex4resp', function(Request $request) {
    $comp = intval($request->input('comp'));
    $larg = intval($request->input('larg'));
    $area = $comp * $larg;
    return view('ex4', compact('area'));
});

Route::get('/ex5', function () {
    return view('ex5');
});
Route::post('ex5resp', function(Request $request) {
    $raio = floatval($request->input('raio'));
    $pi = 3.14159;
    $area = $pi * $raio ** 2;
    return view('ex5', compact('area'));
});

Route::get('/ex6', function () {
    return view('ex6');
});
Route::post('ex6resp', function(Request $request) {
    $comp = intval($request->input('comp'));
    $larg = intval($request->input('larg'));
    $perimetro = (2 * $comp) + (2 * $larg);
    return view('ex6', compact('perimetro'));
});

Route::get('/ex7', function () {
    return view('ex7');
});
Route::post('ex7resp', function(Request $request) {
    $raio = floatval($request->input('raio'));
    $pi = 3.14159;
    $perimetro = $pi * $raio * 2;
    return view('ex7', compact('perimetro'));
});

Route::get('/ex8', function () {
    return view('ex8');
});
Route::post('ex8resp', function(Request $request) {
    $base = intval($request->input('base'));
    $expoente = intval($request->input('expoente'));
    $resultado = $base ** $expoente;
    return view('ex8', compact('resultado'));
});
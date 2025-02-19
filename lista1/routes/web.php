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

Route::get('/ex9', function () {
    return view('ex9');
});
Route::post('ex9resp', function(Request $request) {
    $metros = floatval($request->input('metros'));
    $centimetros = $metros * 100;
    return view('ex9', compact('centimetros'));
});

Route::get('/ex10', function () {
    return view('ex10');
});
Route::post('ex10resp', function(Request $request) {
    $km = floatval($request->input('km'));
    $milhas = $km * 0.621371;
    return view('ex10', compact('milhas'));
});

Route::get('/ex11', function () {
    return view('ex11');
});
Route::post('ex11resp', function(Request $request) {
    $altura = floatval($request->input('altura'));
    $peso = floatval($request->input('peso'));
    $imc = $peso / ($altura ** 2);
    return view('ex11', compact('imc'));
});

Route::get('/ex12', function () {
    return view('ex12');
});
Route::post('ex12resp', function(Request $request) {
    $preco = floatval($request->input('preco'));
    $desconto = floatval($request->input('desconto'));
    $resultado = $preco - ($desconto/100 * $preco);
    return view('ex12', compact('resultado'));
});

Route::get('/ex13', function () {
    return view('ex13');
});
Route::post('ex13resp', function(Request $request) {
    $capital = floatval($request->input('capital'));
    $taxa = floatval($request->input('taxa'));
    $periodo = intval($request->input('periodo'));
    $juros = ($capital * $taxa/100 * $periodo);
    return view('ex13', compact('juros'));
});

Route::get('/ex14', function () {
    return view('ex14');
});
Route::post('ex14resp', function(Request $request) {
    $capital = floatval($request->input('capital'));
    $taxa = floatval($request->input('taxa'));
    $periodo = intval($request->input('periodo'));
    $montante = ($capital * (1 + ($taxa/100)) ** $periodo);
    return view('ex14', compact('montante'));
});

Route::get('/ex15', function () {
    return view('ex15');
});
Route::post('ex15resp', function(Request $request) {
    $dias = intval($request->input('dias'));
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    return view('ex15', compact('horas', 'minutos', 'segundos'));
});
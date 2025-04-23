<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdutoController;
use App\Http\Middleware\RoleAdmMiddleware;
use App\Http\Middleware\RoleCliMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get("/login", [AuthController::class, 'showFormLogin'])->name('login');
Route::post("/login", [AuthController::class, 'login']);

Route::middleware("auth")->group(function () {
    //adm e cliente podem fazer logout
    Route::post("/logout", [AuthController::class, 'logout']);

    //só adm pode acessar produtos
    Route::middleware([RoleAdmMiddleware::class])->group(function () {
        Route::resource("produtos", ProdutoController::class);
        Route::get('/home-adm', function() {
            return view("home-adm");
        });
    });
    
    //só cliente pode acessar home-cli
    Route::middleware([RoleCliMiddleware::class])->group(function () {
        Route::get('/home-cli', function() {
            return view("home-cli");
        });
    });
});

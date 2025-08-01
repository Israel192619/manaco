<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('categorias', App\Http\Controllers\CategoriaController::class);
    Route::apiResource('clientes', App\Http\Controllers\ClienteController::class);
//});

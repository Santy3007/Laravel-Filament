<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('productos', \App\Http\Controllers\ProductoController::class);

// Ruta de prueba
Route::get('/test', function() {
    return response()->json(['message' => '¡API funciona correctamente!']);
});
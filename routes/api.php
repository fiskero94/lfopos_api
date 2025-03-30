<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TokenController;
use Illuminate\Support\Facades\Route;

// Tokens
Route::prefix('tokens')->controller(TokenController::class)->group(function() {
    Route::post('/', 'create');
});

// Products
Route::prefix('products')->controller(ProductController::class)->middleware('auth:sanctum')->group(function() {
    Route::get('/', 'index');
    Route::get('/{product}', 'show');
    Route::post('/', 'create');
    Route::put('/{product}', 'store');
    Route::delete('/{id}', 'destroy');
});

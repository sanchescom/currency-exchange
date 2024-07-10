<?php

use App\Http\Controllers\ExchangeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RatesController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::get('/rates', RatesController::class);
        Route::post('/convert', ExchangeController::class);
    });
    Route::post('/tokens/create', LoginController::class);
});


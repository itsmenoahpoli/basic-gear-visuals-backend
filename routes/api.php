<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

use App\Http\Controllers\Api\SubjectsController;

Route::prefix('v1')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('login', [AuthController::class, 'login'])->name('auth.login');
    });

    Route::prefix('resources')->group(function() {
        Route::apiResource('subjects', SubjectsController::class);
    });
});



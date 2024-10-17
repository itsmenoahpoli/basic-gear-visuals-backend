<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

use App\Http\Controllers\Api\SubjectsController;
use App\Http\Controllers\Api\SectionsController;
use App\Http\Controllers\Api\LecturesController;
use App\Http\Controllers\Api\LectureExamsController;

Route::prefix('v1')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::post('login', [AuthController::class, 'login'])->name('auth.login');

        Route::middleware('auth:sanctum')->group(function() {
            Route::get('me', [AuthController::class, 'me'])->name('auth.me');
            Route::post('logout', [AuthController::class, 'logout'])->name('auth.logout');
        });
    });

    Route::apiResource('subjects', SubjectsController::class);
    Route::apiResource('sections', SectionsController::class);
    Route::apiResource('lectures', LecturesController::class);
    Route::apiResource('lecture-exams', LectureExamsController::class);
});



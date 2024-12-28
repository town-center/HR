<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

Route::group([
    'middleware' => 'api',
    'prefix' => 'hr'
], function ($router) {
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');
    Route::post('/refresh', [AuthController::class, 'refresh'])->middleware('auth:api');
    Route::post('/me', [AuthController::class, 'me'])->middleware('auth:api');
});

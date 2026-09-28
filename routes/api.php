<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

// Public Route (Bisa diakses tanpa token)
Route::post('/login', [AuthController::class, 'login']);

// Protected Route (Wajib menggunakan Header Authorization: Bearer <token>)
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

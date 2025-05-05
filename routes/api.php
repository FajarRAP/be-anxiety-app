<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizHistoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => 'HALO BRO');

Route::controller(AuthController::class)->group(function () {
    Route::post('/auth/register', 'register');
    Route::post('/auth/login', 'login');
    Route::post('/auth/logout', 'logout')->middleware('auth:sanctum');
    Route::get('/auth/user', 'user')->middleware('auth:sanctum');
    Route::put('/auth/user', 'updateProfile')->middleware('auth:sanctum');
});

Route::get('/quiz', [QuizController::class, 'index'])->middleware('auth:sanctum');
Route::get('/quiz/history', [QuizHistoryController::class, 'index'])->middleware('auth:sanctum');
Route::post('/quiz/store', [QuizHistoryController::class, 'store'])->middleware('auth:sanctum');

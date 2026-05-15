<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\RecommendationController;

Route::get('/', function () {
    return "Smart Fertilizer Planner Project Started!";
});

Route::get('/farmers/create', [FarmerController::class, 'create']);
Route::post('/farmers', [FarmerController::class, 'store']);
Route::get('/farmers', [FarmerController::class, 'index']);

Route::get('/farmers/{id}/edit', [FarmerController::class, 'edit']);
Route::put('/farmers/{id}', [FarmerController::class, 'update']);
Route::delete('/farmers/{id}', [FarmerController::class, 'destroy']);



Route::get('/recommendations/create', [RecommendationController::class, 'create']);

Route::post('/recommendations', [RecommendationController::class, 'store']);

Route::get('/recommendations', [RecommendationController::class, 'index']);
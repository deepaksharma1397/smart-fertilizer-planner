<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Farmer;
use App\Models\Recommendation;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\RecommendationController;

Route::get('/', function () {

    $totalFarmers = Farmer::count();

    $totalRecommendations = Recommendation::count();

    $latestFarmer = Farmer::latest()->first();

    $latestRecommendation = Recommendation::latest()->first();

    return view('dashboard', compact(
        'totalFarmers',
        'totalRecommendations',
        'latestFarmer',
        'latestRecommendation'
    ));

})->middleware(['auth']);   // this line means login required

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth'])->group(function () {

    // FARMERS

    Route::get('/farmers', [FarmerController::class, 'index']);

    Route::get('/farmers/create', [FarmerController::class, 'create']);

    Route::post('/farmers', [FarmerController::class, 'store']);

    Route::get('/farmers/{id}/edit', [FarmerController::class, 'edit']);

    Route::put('/farmers/{id}', [FarmerController::class, 'update']);

    Route::delete('/farmers/{id}', [FarmerController::class, 'destroy']);



    // RECOMMENDATIONS

    Route::get('/recommendations', [RecommendationController::class, 'index']);

    Route::get('/recommendations/create', [RecommendationController::class, 'create']);

    Route::post('/recommendations', [RecommendationController::class, 'store']);

    Route::delete('/recommendations/{id}', [RecommendationController::class, 'destroy']);

});
require __DIR__.'/auth.php';

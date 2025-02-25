<?php

use App\Http\Controllers\ClothingItemController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/clothing-items', [ClothingItemController::class, 'index']);
    Route::post('/clothing-items', [ClothingItemController::class, 'store']);
    Route::put('/clothing-items/{clothingItem}', [ClothingItemController::class, 'update']);
    Route::delete('/clothing-items/{clothingItem}', [ClothingItemController::class, 'destroy']);
});

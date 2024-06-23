<?php

use App\Http\Controllers\CatalogueController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/catalogues', [CatalogueController::class, 'index']);
Route::get('/catalogues/{id}', [CatalogueController::class, 'show']);
Route::post('/catalogues', [CatalogueController::class, 'store']);
Route::patch('/catalogues/{id}', [CatalogueController::class, 'update']);
Route::delete('/catalogues/{id}', [CatalogueController::class, 'destroy']);

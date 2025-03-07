<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('cats', CatApiController::class);

Route::get('/cats/{id}/edit', [CatApiController::class, 'edit'])->name('cats.edit');
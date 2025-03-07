<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CatController;

Route::get('/', function () {
    return view('main');
})->name("main");

Route::get("/alumnos",[AlumnoController::class, "index"])
    ->name("alumnos")
    ->middleware("auth");
;

Route::get('/dashboard', function () {
    return view('main');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::put('/cats/{id}', [CatController::class, 'update'])->name('cats.update');
});


Route::view("about", "about")->name('about.index');

require __DIR__.'/auth.php';


Route::resource("cats", CatController::class)->middleware("auth");
Route::get('/cats/{id}/edit', [CatApiController::class, 'edit'])->name('cats.edit');
<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('autor', [AutorController::class, 'index']);
    Route::get('autor/create', [AutorController::class, 'create']);
    Route::post('autor', [AutorController::class, 'store']);
    Route::get('autor/{id}/edit', [AutorController::class, 'edit']);
    Route::put('autor/{id}', [AutorController::class, 'update']);
    Route::delete('autor/{id}', [AutorController::class, 'destroy']);

    Route::get('noticia', [NoticiaController::class, 'index']);
    Route::get('noticia/create', [NoticiaController::class, 'create']);
    Route::post('noticia', [NoticiaController::class, 'store']);
    Route::get('noticia/{id}/edit', [NoticiaController::class, 'edit']);
    Route::put('noticia/{id}', [NoticiaController::class, 'update']);
    Route::delete('noticia/{id}', [NoticiaController::class, 'destroy']);

    Route::get('categoria', [CategoriaController::class, 'index']);
    Route::get('categoria/create', [CategoriaController::class, 'create']);
    Route::post('categoria', [CategoriaController::class, 'store']);
    Route::get('categoria/{id}/edit', [CategoriaController::class, 'edit']);
    Route::put('categoria/{id}', [CategoriaController::class, 'update']);
    Route::delete('categoria/{id}', [CategoriaController::class, 'destroy']);
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\Admin\Amigos\ShowAmigosController;
use App\Http\Controllers\Admin\Amigos\EditAmigosController;
use App\Http\Controllers\Admin\Amigos\DeleteAmigoController;
use App\Http\Controllers\Admin\Amigos\UpdateAmigosController;
use \App\Http\Controllers\Admin\Amigos\SortByController;
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
});

require __DIR__.'/auth.php';

Route::prefix('/admin/amigos')
    ->as('amigos.')
    ->group(function () {
        Route::get('/', ShowAmigosController::class)->name('amigos');

        Route::get('{ID}/edit', EditAmigosController::class)->name('edit');
        Route::get('/{ID}', DeleteAmigoController::class)->name('delete');
        Route::put('{id}/update', UpdateAmigosController::class)->name('update');
    });

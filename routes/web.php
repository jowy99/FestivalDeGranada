<?php

use App\Http\Controllers\Admin\Amigos\ShowAmigosController;
use App\Http\Controllers\Admin\Amigos\ShowEditAmigosController;
use App\Http\Controllers\Admin\Amigos\DeleteAmigoController;
use App\Http\Controllers\Admin\Amigos\UpdateAmigosController;
use App\Http\Controllers\Admin\Amigos\ShowAddAmigosController;
use App\Http\Controllers\Admin\Amigos\StoreAmigosController;

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

Route::middleware('admin')
    ->group(function () {
        Route::prefix('/admin/amigos')
            ->as('amigos.')
            ->group(function () {
                Route::get('/', ShowAmigosController::class)->name('amigos');

                Route::get('{id}/edit', ShowEditAmigosController::class)->name('edit');
                Route::get('/add', ShowAddAmigosController::class)->name('add');
                Route::post('/store', StoreAmigosController::class)->name('store');
                Route::get('/{id}', DeleteAmigoController::class)->name('delete');
                Route::put('/{id}/update', UpdateAmigosController::class)->name('update');
            });
    });



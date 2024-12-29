<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', App\Http\Controllers\Dashboard\IndexController::class)
    ->middleware(['auth'])
    ->name('dashboard.index');
Route::get('/search', App\Http\Controllers\Search\IndexController::class)
    ->middleware(['auth'])
    ->name('search.index');
Route::get('/iraisho', App\Http\Controllers\Iraisho\IndexController::class)
    ->middleware(['auth'])
    ->name('iraisho.index');
Route::get('/Sijisho', App\Http\Controllers\Sijisho\IndexController::class)
    ->middleware(['auth'])
    ->name('sijisho.index');
Route::get('/Kokuban', App\Http\Controllers\Kokuban\IndexController::class)
    ->middleware(['auth'])
    ->name('kokuban.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

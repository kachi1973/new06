<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', App\Http\Controllers\Dashboard\IndexController::class)
    ->middleware(['auth'])
    ->name('dashboard');
Route::get('/search', App\Http\Controllers\Search\IndexController::class)
    ->middleware(['auth'])
    ->name('search.index');
Route::get('/iraisho', App\Http\Controllers\Iraisho\ShowController::class)
    ->middleware(['auth'])
    ->name('iraisho.show');
Route::get('/sijisho', App\Http\Controllers\Sijisho\ShowController::class)
    ->middleware(['auth'])
    ->name('sijisho.show');
Route::get('/kokuban', App\Http\Controllers\Kokuban\ShowController::class)
    ->middleware(['auth'])
    ->name('kokuban.show');
Route::get('/shasin', App\Http\Controllers\Shasin\ShowController::class)
    ->middleware(['auth'])
    ->name('shasin.show');
Route::get('/iraisaki', App\Http\Controllers\Iraisaki\ShowController::class)
    ->middleware(['auth'])
    ->name('iraisaki.show');
Route::get('/kozai', App\Http\Controllers\Kozai\ShowController::class)
    ->middleware(['auth'])
    ->name('kozai.show');
Route::get('/kasekisai', App\Http\Controllers\Kasekisai\IndexController::class)
    ->middleware(['auth'])
    ->name('kasekisai.index');
Route::get('/kasekisai/show', App\Http\Controllers\Kasekisai\ShowController::class)
    ->middleware(['auth'])
    ->name('kasekisai.show');
Route::get('/satuei', App\Http\Controllers\Satuei\IndexController::class)
    ->middleware(['auth'])
    ->name('satuei.index');
Route::get('/admin', App\Http\Controllers\Admin\IndexController::class)
    ->middleware(['auth'])
    ->name('admin.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

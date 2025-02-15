<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UrlController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [UrlController::class, 'index'])->name('dashboard');
    Route::post('/shorten', [UrlController::class, 'store'])->name('shorten');
});

Route::get('/{shortCode}', [UrlController::class, 'redirect'])->name('redirect');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionCommentController;

// routes/web.php
Route::get('/', function () {
    return view('guest-home');
})->name('guest.home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/d-day', function () {
    return view('d-day');
})->name('countdown.target');

Route::get('/registerSuccess', function () {
    return view('auth.register-success');
})->middleware(['auth', 'verified'])->name('registerSuccess');

Route::middleware('auth')->post('/session-comment', [SessionCommentController::class, 'store']);

Route::post('/session-comment', [App\Http\Controllers\SessionCommentController::class, 'store'])->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';

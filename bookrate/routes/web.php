<?php

use App\Http\Controllers\User\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('layouts.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profilecustom', function () {
        return view('layouts.profile');
    });
    Route::get('/edit_profile', [ProfileController::class, 'edit']);
    Route::put('/edit_profile', [ProfileController::class, 'update'])->name('edit_profile');
});

require __DIR__.'/auth.php';

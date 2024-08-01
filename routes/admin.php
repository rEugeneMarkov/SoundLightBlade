<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Home\IndexController;
use App\Http\Controllers\Admin\ProfileController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::name('profile.')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('destroy');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController;
use App\Http\Controllers\Main\LanguageController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('language/{language}', LanguageController::class)->name('language');

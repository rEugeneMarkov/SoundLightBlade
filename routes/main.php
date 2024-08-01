<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main\IndexController;

Route::get('/', [IndexController::class, 'index'])->name('home');

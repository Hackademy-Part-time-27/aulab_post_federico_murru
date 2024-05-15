<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');


Route::get('/register', [PublicController::class, 'auth.register'])->name('homepage');

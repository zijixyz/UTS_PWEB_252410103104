<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'prosesLogin']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [AuthController::class, 'profile'])->name('profile');
Route::get('/pengelolaan', [AuthController::class, 'pengelolaan'])->name('pengelolaan');

Route::get('/', function () {
    return redirect()->route('login');
});

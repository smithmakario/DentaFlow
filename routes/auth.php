<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('register', [RegisterController::class, 'index'])->name('register');

Route::get('login', [LoginController::class, 'index'])->name('login');

Route::post('login', [LoginController::class, 'login'])->name('login.auth');

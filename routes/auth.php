<?php
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;

Route::livewire('register', 'pages::auth.register')->name('register');

Route::livewire('login', 'pages::auth.login')->name('login');

Route::livewire('forgot-password', 'pages::auth.forgot-password')->name('forgot-password');

Route::livewire('change-password', 'pages::auth.change-password')->name('change-password');

Route::post('logout', LogoutController::class)->name('logout');

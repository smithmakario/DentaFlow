<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        // your actual routes
        Route::get('', HomeController::class)->name('index');

        Route::livewire('login', 'pages::central.auth.login')->name('login');
        Route::livewire('register', 'pages::central.auth.register')->name('register');

        Route::livewire('admin/login', 'pages::central.auth.admin')->name('admin.login');
        
        Route::post('logout', LogoutController::class)->name('logout');

        Route::livewire('admin', 'pages::central.admin.dashboard')->middleware('auth')->name('admin.dashboard');
        Route::livewire('admin/branches', 'pages::central.admin.branches')->middleware('auth')->name('admin.branches');
    });
}

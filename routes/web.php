<?php

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        // your actual routes
        Route::get('', HomeController::class)->name('index');

        Route::livewire('login', 'pages::central.auth.login')->name('central.login');
        Route::livewire('register', 'pages::central.auth.register')->name('central.register');

        Route::livewire('admin/login', 'pages::central.auth.admin')->name('admin.login');
        
        Route::post('logout', LogoutController::class)->name('central.logout');

        Route::livewire('admin', 'pages::central.admin.dashboard')->middleware('admin.auth')->name('admin.dashboard');
        Route::livewire('admin/branches', 'pages::central.admin.branches')->middleware('admin.auth')->name('admin.branches');
        Route::livewire('admin/users', 'pages::central.admin.global-users')->middleware('admin.auth')->name('admin.users');
        Route::livewire('admin/services', 'pages::central.admin.dental-services')->middleware('admin.auth')->name('admin.services');
    });
}

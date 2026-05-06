<?php

use App\Http\Controllers\Admin\ClinicController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Clinic\DashboardController as ClinicDashboardController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        // your actual routes
        Route::get('', HomeController::class)->name('index');

        //Route::livewire('login', 'pages::central.auth.login')->name('central.login');
        //Route::livewire('register', 'pages::central.auth.register')->name('central.register');
        Route::get('login', [AuthenticatedSessionController::class, 'login'])->name('central.login');

        Route::livewire('admin/login', 'pages::central.auth.admin')->name('admin.login');
        
        Route::post('logout', LogoutController::class)->name('central.logout');

        Route::get('admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
        Route::get('/admin/clinic', [ClinicController::class, 'index'])->name('admin.clinic.index');
        Route::get('/admin/clinic/add', [ClinicController::class, 'add'])->name('admin.clinic.add');

        Route::get('clinic', [ClinicDashboardController::class, 'index'])->name('clinic.dashboard.index');

        // Route::livewire('admin', 'pages::central.admin.dashboard')->middleware('admin.auth')->name('admin.dashboard');
        Route::livewire('admin/branches', 'pages::central.admin.branches')->middleware('admin.auth')->name('admin.branches');
        Route::livewire('admin/users', 'pages::central.admin.global-users')->middleware('admin.auth')->name('admin.users');
        Route::livewire('admin/services', 'pages::central.admin.dental-services')->middleware('admin.auth')->name('admin.services');
    });
}

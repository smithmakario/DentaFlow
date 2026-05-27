<?php

use App\Http\Controllers\Admin\AnalyticsController;
use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\ClinicController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\SubscriptionsController;
use App\Http\Controllers\Clinic\DashboardController as ClinicDashboardController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Clinic\PatientsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Patient\AppointmentController;
use Illuminate\Support\Facades\Route;

foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        // your actual routes
        Route::get('', HomeController::class)->name('index');

        //Route::livewire('login', 'pages::central.auth.login')->name('central.login');
        //Route::livewire('register', 'pages::central.auth.register')->name('central.register');
        Route::get('login', [AuthenticatedSessionController::class, 'login'])->name('central.login');
        Route::post('auth/login', [AuthenticatedSessionController::class, 'authUser'])->name('auth.login');

        Route::livewire('admin/login', 'pages::central.auth.admin')->name('admin.login');
        
        Route::post('logout', LogoutController::class)->name('central.logout');

        Route::get('admin', [AdminDashboardController::class, 'index'])->middleware('auth')->name('admin.dashboard.index');
        Route::get('admin/clinic', [ClinicController::class, 'index'])->name('admin.clinic.index');
        Route::get('admin/clinic/add', [ClinicController::class, 'add'])->name('admin.clinic.add');
        Route::get('admin/clinic/add/branches', [ClinicController::class, 'stepBranches'])->name('admin.clinic.add.branches');
        Route::get('admin/clinic/add/subscriptions', [ClinicController::class, 'stepSubscriptions'])->name('admin.clinic.add.subscriptions');
        Route::get('admin/clinic/add/user', [ClinicController::class, 'stepUser'])->name('admin.clinic.add.user');
        Route::get('admin/subscriptions', [SubscriptionsController::class, 'index'])->name('admin.subscriptions.index');
        Route::get('admin/analytics', [AnalyticsController::class, 'index'])->name('admin.analytics.index');
        Route::get('admin/staff', [StaffController::class, 'index'])->name('admin.staff.index');
        Route::get('admin/audit-log', [AuditLogController::class, 'index'])->name('admin.audit.index');

        Route::livewire('clinic/add', 'pages::clinic.add')->name('clinic.add');
        Route::get('clinic', [ClinicDashboardController::class, 'index'])->name('clinic.dashboard.index');
        Route::get('clinic/patients/view', [PatientsController::class, 'view'])->name('clinic.patients.view');

        Route::get('patients/appointments/create', [AppointmentController::class, 'create'])->name('patients.appointments.create');
        Route::get('patients/appointments/create/provider', [AppointmentController::class, 'provider'])->name('patients.appointments.provider');
        Route::get('patients/appointments/create/time', [AppointmentController::class, 'time'])->name('patients.appointments.time');
        Route::get('patients/appointments/create/review', [AppointmentController::class, 'review'])->name('patients.appointments.review');

        // Route::livewire('admin', 'pages::central.admin.dashboard')->middleware('admin.auth')->name('admin.dashboard');
        Route::livewire('admin/branches', 'pages::central.admin.branches')->middleware('admin.auth')->name('admin.branches');
        Route::livewire('admin/users', 'pages::central.admin.global-users')->middleware('admin.auth')->name('admin.users');
        Route::livewire('admin/services', 'pages::central.admin.dental-services')->middleware('admin.auth')->name('admin.services');
    });
}

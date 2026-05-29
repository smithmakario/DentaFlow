<?php declare(strict_types=1);

use App\Http\Controllers\AppointmentAPIController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
 * |--------------------------------------------------------------------------
 * | Tenant Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here you can register the tenant routes for your application.
 * | These routes are loaded by the TenantRouteServiceProvider.
 * |
 * | Feel free to customize them however you want. Good luck!
 * |
 */

Route::middleware([
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
    'web',
])->group(function () {

    Route::livewire('', 'pages::clinic_admin.dashboard')->middleware('auth')->name('clinic_admin.dashboard');
    Route::livewire('branches', 'pages::clinic_admin.branches')->middleware('auth')->name('clinic_admin.branches.index');
    Route::livewire('branches/add', 'pages::clinic_admin.add-branch')->middleware('auth')->name('clinic_admin.branches.add');
    Route::livewire('patients', 'pages::clinic_admin.patients')->middleware('auth')->name('clinic_admin.patients');

    require_once __DIR__ . '/auth.php';
        
    require_once __DIR__ . '/clinician.php';

    require_once __DIR__ . '/patient.php';
});

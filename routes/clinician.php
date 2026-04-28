<?php

use App\Http\Controllers\AppointmentAPIController;
use App\Http\Controllers\Clinician\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('clinician')->middleware('auth', 'user_type:clinician,admin')->group(function (){
    
    Route::get('/api/calendar/appointments', [AppointmentAPIController::class, 'clinician'])->name('clinician.calendar.appointments');
    
    Route::livewire('', 'pages::clinician.dashboard')->name('clinician.dashboard');
    Route::livewire('appointments', 'pages::clinician.appointments')->name('clinician.appointments');
    Route::livewire('appointments/calendar', 'pages::clinician.calendar')->name('clinician.calendar');
    Route::livewire('treatments', 'pages::clinician.treatments')->name('clinician.treatments');
    Route::livewire('invoices', 'pages::clinician.invoices')->name('clinician.invoices');
    Route::livewire('profile', 'pages::clinician.profile')->name('clinician.profile');

});

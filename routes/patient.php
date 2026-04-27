<?php

use App\Http\Controllers\AppointmentAPIController;
use Illuminate\Support\Facades\Route;

Route::prefix('patient')->middleware('auth', 'user_type:patient,admin')->group(function () {
    Route::get('/api/calendar/appointments', [AppointmentAPIController::class, 'patient'])->name('patient.calendar.appointments');

    Route::livewire('', 'pages::patient.dashboard')->name('patient.dashboard');
    Route::livewire('appointments', 'pages::patient.appointments')->name('patient.appointments');
    Route::livewire('appointments/calendar', 'pages::patient.calendar')->name('patient.calendar');
    Route::livewire('medical-records', 'pages::patient.medical-records')->name('patient.medical-records');
    Route::livewire('documents', 'pages::patient.documents')->name('patient.documents');
    Route::livewire('profile', 'pages::patient.profile')->name('patient.profile');
});

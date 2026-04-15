<?php

use Illuminate\Support\Facades\Route;

Route::prefix('patient')->middleware('auth', 'user_type:patient')->group(function () {
    Route::livewire('', 'pages::patient.dashboard')->name('patient.dashboard');
    Route::livewire('appointments', 'pages::patient.appointments')->name('patient.appointments');
    Route::livewire('medical-records', 'pages::patient.medical-records')->name('patient.medical-records');
});

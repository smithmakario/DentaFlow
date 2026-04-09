<?php

use App\Http\Controllers\Patient\DashboardController;
use App\Http\Controllers\Patient\AppointmentController;
use Illuminate\Support\Facades\Route;

Route::get("patient/dashboard", [DashboardController::class, 'index'])->name('patient.dashboard');
Route::get("patient/appointments", [AppointmentController::class, 'index'])->name('patient.appointments.index');

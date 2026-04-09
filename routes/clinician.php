<?php

use App\Http\Controllers\Clinician\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('', [DashboardController::class, 'index'])->name('clinician.dashboard');

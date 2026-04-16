<?php

use App\Http\Controllers\Clinician\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('clinician')->middleware('auth', 'user_type:clinician,admin')->group(function (){
    
    Route::livewire('', 'pages::clinician.dashboard')->name('clinician.dashboard');
    Route::livewire('appointments', 'pages::clinician.appointments')->name('clinician.appointments');
    Route::livewire('profile', 'pages::clinician.profile')->name('clinician.profile');

});

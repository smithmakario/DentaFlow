<?php

use App\Http\Controllers\Clinician\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('clinician')->middleware('auth', 'user_type:clinician')->group(function (){
    
    Route::livewire('', 'pages::clinician.dashboard')->name('clinician.dashboard');

});

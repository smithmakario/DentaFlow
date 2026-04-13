<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        // your actual routes
        Route::get('/', HomeController::class)->name('index');
    });
}





<?php

use App\Http\Controllers\Pages\LandingPage;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingPage::class)->name('index');





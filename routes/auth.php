<?php
use Illuminate\Support\Facades\Route;

Route::livewire('register', 'auth.register')->name('register');

Route::livewire('login', 'auth.login')->name('login');


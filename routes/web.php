<?php

use App\Http\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/dashboard');

Route::get('/dashboard', App\Http\Controllers\Dashboard\DashboardController::class);

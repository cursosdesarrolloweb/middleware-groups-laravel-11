<?php

use App\Http\Controllers\Backoffice\DashboardController;
use Illuminate\Support\Facades\Route;

Route::jsonGroup('dashboard', DashboardController::class, [
    'index', 'json'
]);

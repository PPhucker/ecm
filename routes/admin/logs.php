<?php

use App\Http\Controllers\Admin\LogController;
use Illuminate\Support\Facades\Route;

Route::get('/logs', [LogController::class, 'index'])
    ->name('logs.index');

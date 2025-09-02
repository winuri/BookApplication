<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\QrController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/content-management', [ContentController::class, 'index'])->name('content.index');
Route::get('/qr-management', [QrController::class, 'index'])->name('qr.index');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\QrController;

// Public Website Home Page
Route::get('/', function () {
    return view('kids'); // landing page
})->name('home');

// Admin Login
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// Admin Dashboard (protected by auth middleware)
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// Other routes
Route::get('/content-management', [ContentController::class, 'index'])->name('content.index');
Route::get('/qr-management', [QrController::class, 'index'])->name('qr.index');

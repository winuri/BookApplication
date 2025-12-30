<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\QrController;



// ------------------ Public Website ------------------
// Landing page for all users
Route::get('/', function () {
    return view('kids'); // Kids landing page
})->name('home');

// ------------------ Admin Authentication ------------------
// Show login form
Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
// Handle login submission
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');

// ------------------ Admin Dashboard ------------------
// Protected routes, only accessible after login
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

// ------------------ Other Protected Routes ------------------
// Content Management
Route::middleware(['auth'])->group(function () {
    Route::get('/content-management', [ContentController::class, 'index'])->name('content.index');
});

// QR Management
Route::middleware(['auth'])->group(function () {
    Route::get('/qr-management', [QrController::class, 'index'])->name('qr.index');
});

<?php

use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\HomeController;
use App\Models\Service;
use App\Models\Testimony;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// 🔐 Auth Routes (Guest Only)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register.show');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');

    Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name('password.request');
    Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');

    Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
    Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('password.update');
});

// 🔓 Logout (harus pakai POST)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// 👑 Admin Dashboard (hanya admin)
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::post('/profile/update', [AdminController::class, 'updateProfile'])->name('profile.update');

    // CRUD Service hanya untuk admin
    Route::resource('services', ServiceController::class);
});


// 👤 User Profile (user biasa)
Route::middleware('auth')->group(function () {
    Route::get('/email/verify', [AuthController::class, 'showVerifyEmail'])->name('verification.notice');
    Route::get('/email/verify/{id}/{hash}', [AuthController::class, 'verifyEmail'])->middleware('signed')->name('verification.verify');
    Route::post('/email/verification-notification', [AuthController::class, 'resendVerification'])->middleware('throttle:6,1')->name('verification.resend');

    Route::get('/profile', [AuthController::class, 'showProfile'])->name('user.profile');
    Route::post('/profile/update', [AuthController::class, 'updateProfile'])->name('user.profile.update');
});


// 💬 Testimoni Publik (bisa dilihat semua orang)
Route::get('/testimonies', [TestimonyController::class, 'index'])->name('testimonies.index');

// ✍️ Testimoni CRUD (hanya user login)
Route::middleware('auth')->group(function () {
    Route::get('/testimonies/create', [TestimonyController::class, 'create'])->name('testimonies.create');
    Route::post('/testimonies', [TestimonyController::class, 'store'])->name('testimonies.store');
    Route::get('/testimonies/{testimony}/edit', [TestimonyController::class, 'edit'])->name('testimonies.edit');
    Route::put('/testimonies/{testimony}', [TestimonyController::class, 'update'])->name('testimonies.update');
    Route::delete('/testimonies/{testimony}', [TestimonyController::class, 'destroy'])->name('testimonies.destroy');
});

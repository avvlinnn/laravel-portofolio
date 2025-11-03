<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AuthController;

// ====== HALAMAN UTAMA ======
Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/about', [PortfolioController::class, 'about'])->name('about');

// ====== CONTACT ======
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/send-to-wa', [ContactController::class, 'sendToWhatsApp'])->name('sendToWhatsApp');

// ====== ACTIVITIES ======
// Semua orang boleh lihat daftar aktivitas
Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');

// Fitur CRUD hanya untuk admin yang login
Route::middleware(['auth'])->group(function () {
    Route::get('/activities/create', [ActivityController::class, 'create'])->name('activities.create');
    Route::post('/activities', [ActivityController::class, 'store'])->name('activities.store');
    Route::get('/activities/{activity}/edit', [ActivityController::class, 'edit'])->name('activities.edit');
    Route::put('/activities/{activity}', [ActivityController::class, 'update'])->name('activities.update');
    Route::delete('/activities/{activity}', [ActivityController::class, 'destroy'])->name('activities.destroy');
});

// ====== LOGIN & LOGOUT ======
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.process');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

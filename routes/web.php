<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route đăng nhập
Route::post('/check-login', [LoginController::class, 'checkLogin'])->name('checkLogin');

// Các route yêu cầu người dùng đã đăng nhập
Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

// Các route đăng nhập và đăng ký mặc định của Laravel
Auth::routes();

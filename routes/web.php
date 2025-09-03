<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;


// jika user akses root (/), redirect ke login
Route::get('/', function () {
    return redirect()->route('login');
});

// Login Route
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'loginStore']);

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


// Semua route yang butuh login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        $user = auth()->user();

        if ($user->role === 'superadmin') {
            return redirect()->route('superadmin.dashboard');
        } elseif ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('user.dashboard');
        }
    })->name('dashboard');

    // Super Admin
    Route::get('/superadmin/dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard');
    
    // Admin
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // User
    Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');

    // profile 
    Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    });
    
});
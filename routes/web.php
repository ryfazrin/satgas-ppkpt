<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\Controller;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\AlurPelaporanController;


Route::get('/', function () {
    return view('home');
});
// Route untuk Alur Pelaporan (akses publik tanpa middleware)
Route::get('/alur-pelaporan', [AlurPelaporanController::class, 'index'])->name('alur_pelaporan.index');

// Group routes that require authentication
Route::middleware(['auth'])->group(function () {
    // User routes
    


    
    Route::get('/form-pelaporan', function () {
        return view('laporan.form_pelaporan');
    })->name('laporan.view');
    Route::post('/form-pelaporan', [LaporanController::class, 'store'])->name('laporan.store');

    // Dashboard route
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
});


Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/user/login', [AuthController::class, 'showLoginForm'])->name('user.login');
    Route::post('/user/login', [AuthController::class, 'login']);
    Route::get('/user/register', [AuthController::class, 'showRegisterForm'])->name('user.register');
    Route::post('/user/register', [AuthController::class, 'register']);

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/dashboard/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/dashboard/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/dashboard/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/dashboard/users/{user}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/dashboard/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
});


Route::middleware('auth')->post('/logout', [AuthController::class, 'logout'])->name('logout');



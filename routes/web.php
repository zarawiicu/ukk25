<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AuthController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
//Register

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

//Login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Welcome
Route::get('/', function () {
    return view('welcome');
});

// Dashboard umum
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboard Admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'cekRole:admin'])->name('admin.dashboard');

// Dashboard Owner
Route::get('/owner/dashboard', function () {
    return view('owner.dashboard');
})->middleware(['auth', 'cekRole:owner'])->name('owner.dashboard');

// Dashboard Pelanggan
Route::get('/pelanggan/dashboard', function () {
    return view('pelanggan.dashboard');
})->middleware(['auth', 'cekRole:pelanggan'])->name('pelanggan.dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::resource('kategoris', \App\Http\Controllers\KategoriController::class);
    Route::resource('barangs', \App\Http\Controllers\BarangController::class);
});

Route::resource('kategoris', KategoriController::class);
Route::resource('barangs', BarangController::class);

Route::get('transaksi/{transaksi}/print', [TransaksiController::class, 'print'])->name('transaksi.print');


// Auth route (login, register, dsb)
require __DIR__.'/auth.php';


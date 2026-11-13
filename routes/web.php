<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SiswaController;

Route::get('/', function () {
    return redirect()->route('login');
});

// Login Page
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::middleware(['auth', 'role:guru'])->prefix('guru')->name('guru.')->group(function () {
    Route::get('/', [GuruController::class, 'index'])->name('table');
    Route::get('/tambah', [GuruController::class, 'create'])->name('tambah');
    Route::post('/store', [GuruController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [GuruController::class, 'edit'])->name('edit');
    Route::put('/update/{guru}', [GuruController::class, 'update'])->name('update');
    Route::delete('/destroy/{guru}', [GuruController::class, 'destroy'])->name('destroy');
});

Route::middleware(['auth', 'role:siswa'])->prefix('siswa')->name('siswa.')->group(function () {
    Route::get('/', [SiswaController::class, 'index'])->name('table');
    Route::get('/tambah', [SiswaController::class, 'create'])->name('tambah');
    Route::post('/store', [SiswaController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [SiswaController::class, 'edit'])->name('edit');
    Route::put('/update/{siswa}', [SiswaController::class, 'update'])->name('update');
    Route::delete('/destroy/{siswa}', [SiswaController::class, 'destroy'])->name('destroy');
});

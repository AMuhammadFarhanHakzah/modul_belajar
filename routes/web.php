<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\ModulDetailController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'homepage'])->name('home');
Route::get('/modul', [HomeController::class, 'modul'])->name('modul');
Route::get('/modul/{modul_id}', [HomeController::class, 'modulDetail'])->name('modul_detail');

Route::get('/admin', [DashboardController::class, 'dashboard'])->name('dashboard');

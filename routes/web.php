<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModulController;
use App\Http\Controllers\ModulDetailController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/modul', [ModulController::class, 'index'])->name('modul');
Route::get('/modul/{modul_id}', [ModulDetailController::class, 'index'])->name('modul_detail');

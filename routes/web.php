<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\ModulController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomepageController::class, 'homepage'])->name('home');
Route::get('/modul', [HomepageController::class, 'modul'])->name('modul');
Route::get('/modul/{modul_id}', [HomepageController::class, 'modulDetail'])->name('modul_detail');
Route::get('/modul/{modul_id}/view', [HomepageController::class, 'modulView'])->name('modulView');
// Route::get('modul/{modul_id}/{full_document}', [HomepageController::class, 'modulView'])->name('modulView');

Route::prefix('admin')->middleware(['auth', 'Admin99'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/user', [DashboardController::class, 'user'])->name('user');
    Route::resource('modul_admin', ModulController::class);
});



Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::post('/logout', ['Auth\LoginController@logout'])->name('logout');
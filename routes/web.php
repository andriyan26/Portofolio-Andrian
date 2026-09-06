<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - 100% Publik Tanpa Login
|--------------------------------------------------------------------------
| Seluruh rute portofolio dan kontak dapat diakses langsung
| oleh pengunjung tanpa perlu registrasi atau login.
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// Contact Message Route
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

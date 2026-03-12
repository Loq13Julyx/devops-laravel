<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Landing Page
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('landing.index');
})->name('home');

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/dashboard', function () {
    return 'Dashboard Admin';
})->middleware(['auth', 'verified', 'role:admin'])->name('admin.dashboard');

Route::get('/kasir/dashboard', function () {
    return 'Dashboard Kasir';
})->middleware(['auth', 'verified', 'role:kasir'])->name('cashier.dashboard');

Route::get('/staff/dashboard', function () {
    return 'Dashboard Staff';
})->middleware(['auth', 'verified', 'role:staff'])->name('staff.dashboard');

/*
|--------------------------------------------------------------------------
| Profile
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';
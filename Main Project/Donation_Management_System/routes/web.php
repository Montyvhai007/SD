<?php

use Illuminate\Support\Facades\Route;
// routes/web.php

// Fundraiser routes
Route::get('/signup/fundraiser', [FundraiserController::class, 'showSignup'])->name('signup.fundraiser');
Route::get('/login/fundraiser', [FundraiserController::class, 'showLogin'])->name('login.fundraiser');

// Donor routes
Route::get('/signup/donor', [DonorController::class, 'showSignup'])->name('signup.donor');
Route::get('/login/donor', [DonorController::class, 'showLogin'])->name('login.donor');

// Admin route
Route::get('/admin', [AdminController::class, 'index'])->name('admin.panel');
cd

Route::get('/', function () {
    return view('welcome');
});

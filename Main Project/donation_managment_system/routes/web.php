<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\FundraiserAuthController;
use App\Http\Controllers\Auth\DonorAuthController;

// Landing Page
Route::get('/', function () {
    return view('index');
})->name('index');

// Select User Page
Route::get('/select-user', function () {
    return view('select_user');
})->name('select.user');

// Fundraiser Routes
Route::get('/fundraiser/login', [FundraiserAuthController::class, 'showLoginForm'])->name('fundraiser.login');
Route::get('/fundraiser/signup', [FundraiserAuthController::class, 'showSignupForm'])->name('fundraiser.signup');

// Donor Routes
Route::get('/donor/login', [DonorAuthController::class, 'showLoginForm'])->name('donor.login');
Route::get('/donor/signup', [DonorAuthController::class, 'showSignupForm'])->name('donor.signup');

// Forgot Password
Route::get('/forgot-password', function () {
    return view('forgot_password');
})->name('forgot.password');

// Donation List Page
Route::get('/donation-list', function () {
    return view('donation_list');
})->name('donation.list');

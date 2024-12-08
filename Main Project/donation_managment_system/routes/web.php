<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FundraiserController;
use App\Http\Controllers\DonorController;

// Landing Page
Route::get('/', function () {
    return view('index');
})->name('index');

// Select User Page
Route::get('/select-user', function () {
    return view('select_user');
})->name('select.user');

// Fundraiser Routes
Route::get('/fundraiser/signup', [FundraiserController::class, 'showSignupForm'])->name('fundraiser.signup');
Route::post('/fundraiser/signup', [FundraiserController::class, 'signup'])->name('fundraiser.signup.post');
Route::get('/fundraiser/login', [FundraiserController::class, 'showLoginForm'])->name('fundraiser.login');
Route::post('/fundraiser/login', [FundraiserController::class, 'login'])->name('fundraiser.login.post');
Route::get('/fundraiser/list', [FundraiserController::class, 'showFundList'])->name('fundraiser.list');

// Donor Routes
Route::get('/donor/signup', [DonorController::class, 'showSignupForm'])->name('donor.signup');
Route::post('/donor/signup', [DonorController::class, 'signup'])->name('donor.signup.post');
Route::get('/donor/login', [DonorController::class, 'showLoginForm'])->name('donor.login');
Route::post('/donor/login', [DonorController::class, 'login'])->name('donor.login.post');
Route::get('/donor/donate', [DonorController::class, 'showDonationPage'])->name('donor.donate');

// Donation List Page
Route::get('/donation-list', function () {
    return view('donation_list');
})->name('donation.list');

<?php

use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', function () {
    return view('index');
})->name('index');

// Select User Page
Route::get('/select-user', function () {
    return view('select_user');
})->name('select.user');

// Fundraiser Login Page
Route::get('/fundraiser/login', function () {
    return 'Fundraiser Login Page';
})->name('fundraiser.login');

// Fundraiser Signup Page
Route::get('/fundraiser/signup', function () {
    return 'Fundraiser Signup Page';
})->name('fundraiser.signup');


// Donor Login Page
Route::get('/donor/login', function () {
    return 'Donor Login Page';
})->name('donor.login');

// Donor Signup Page
Route::get('/donor/signup', function () {
    return 'Donor Signup Page';
})->name('donor.signup');


// Forgot Password Page
Route::get('/forgot-password', function () {
    return view('forgot_password');
})->name('forgot.password');

// Donation List Page
Route::get('/donation-list', function () {
    return view('donation_list');
})->name('donation.list');

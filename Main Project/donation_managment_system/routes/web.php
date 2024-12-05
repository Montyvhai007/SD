<?php

use Illuminate\Support\Facades\Route;

// Landing page
Route::get('/', function () {
    return view('index');
});

// Select user page
Route::get('/select-user', function () {
    return view('select_user');
});

// Login page
Route::get('/login', function () {
    return view('login');
});

// Signup page
Route::get('/signup', function () {
    return view('signup');
});

// Forgot password page
Route::get('/forgot-password', function () {
    return view('forgot_password');
});

Route::get('/', function () {
    return view('index');
});
Route::get('/select-user', function () {
    return view('select_user');
});


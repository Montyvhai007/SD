<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class FundraiserAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.fundraiser_login');
    }

    public function showSignupForm()
    {
        return view('auth.fundraiser_signup');
    }
}

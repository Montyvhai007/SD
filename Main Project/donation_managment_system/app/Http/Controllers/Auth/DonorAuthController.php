<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

class DonorAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.donor_login');
    }

    public function showSignupForm()
    {
        return view('auth.donor_signup');
    }
}

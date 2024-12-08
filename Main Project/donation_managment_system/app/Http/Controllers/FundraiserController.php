<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FundraiserController extends Controller
{
    // Show the signup form
    public function showSignupForm()
    {
        return view('fundraiser.signup');
    }

    // Handle the signup logic
    public function signup(Request $request)
    {
        // Handle signup logic here
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('fundraiser.login');
    }

    // Handle the login logic
    public function login(Request $request)
    {
        // Handle login logic here (e.g., authentication)
    }

    // Show list of fundraisers
    public function showFundList()
    {
        return view('fundraiser.list');
    }
}


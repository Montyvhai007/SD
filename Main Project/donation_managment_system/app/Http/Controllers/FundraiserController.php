<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FundraiserController extends Controller
{
    public function showSignupForm()
    {
        return view('fundraiser.signup'); // This should point to the correct view file.
    }
}

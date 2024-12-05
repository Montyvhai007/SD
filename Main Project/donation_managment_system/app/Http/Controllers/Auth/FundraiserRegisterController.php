<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FundraiserRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register-fundraiser');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:fundraisers',
            'password' => 'required|min:6|confirmed',
        ]);

        Fundraiser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('fundraiser.login');
    }
}

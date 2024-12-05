<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FundraiserLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login-fundraiser');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('fundraiser')->attempt($request->only('email', 'password'))) {
            return redirect()->route('fundraiser.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}

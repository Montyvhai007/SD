<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonorLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login-donor');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('donor')->attempt($request->only('email', 'password'))) {
            return redirect()->route('donor.dashboard');
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }
}

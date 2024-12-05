<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonorRegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register-donor');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:donors',
            'password' => 'required|min:6|confirmed',
        ]);

        Donor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('donor.login');
    }
}

<!-- resources/views/donor/login.blade.php -->

@extends('layouts.app')

@section('content')
<div class="auth-container">
    <div class="auth-box">
        <h2>Donor Login</h2>
        <form action="#" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Enter your password" required>
            <button type="submit" class="btn">Login</button>
            <p><a href="{{ route('forgot.password') }}">Forgot Password?</a></p>
        </form>
        <p>Don't have an account? <a href="{{ route('donor.signup') }}">Sign Up</a></p>
    </div>
</div>
@endsection

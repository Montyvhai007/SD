<!-- resources/views/forgot_password.blade.php -->

@extends('layouts.app')

@section('content')
<div class="auth-container">
    <div class="auth-box">
        <h2>Forgot Password</h2>
        <form action="#" method="POST">
            @csrf
            <input type="email" name="email" placeholder="Enter your email to reset" required>
            <button type="submit" class="btn">Reset Password</button>
        </form>
        <p>Remember your password? <a href="{{ route('fundraiser.login') }}">Login</a></p>
    </div>
</div>
@endsection

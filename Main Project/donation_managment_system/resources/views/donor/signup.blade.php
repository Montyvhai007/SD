<!-- resources/views/donor/signup.blade.php -->

@extends('layouts.app')

@section('content')
<div class="auth-container">
    <div class="auth-box">
        <h2>Donor Signup</h2>
        <form action="#" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="email" name="email" placeholder="Enter your email" required>
            <input type="password" name="password" placeholder="Create a password" required>
            <button type="submit" class="btn">Sign Up</button>
            <p>Already have an account? <a href="{{ route('donor.login') }}">Login</a></p>
        </form>
    </div>
</div>
@endsection

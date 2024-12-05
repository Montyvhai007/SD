@extends('layout')

@section('content')
<div class="login-container">
    <h2>Fundraiser Login</h2>
    <form action="{{ route('fundraiser.login') }}" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Enter your email" required>
        <input type="password" name="password" placeholder="Enter your password" required>
        <button type="submit">Login</button>
    </form>
    <a href="{{ route('forgot.password') }}">Forgot Password?</a>
</div>
@endsection

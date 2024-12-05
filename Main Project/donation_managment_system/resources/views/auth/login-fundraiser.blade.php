<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login as Fundraiser</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="container">
        <h2>Login as Fundraiser</h2>
        <form action="{{ url('/fundraiser/login') }}" method="POST">
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required><br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required><br>

            <button type="submit">Login</button>
        </form>
        <a href="{{ route('forgot.password') }}">Forgot Password?</a>
    </div>
</body>
</html>

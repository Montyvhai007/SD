<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="container">
        <h2>Forgot Your Password?</h2>
        <form action="{{ url('/forgot-password') }}" method="POST">
            @csrf
            <label for="email">Enter your email address</label>
            <input type="email" name="email" id="email" required><br>

            <button type="submit">Send Password Reset Link</button>
        </form>
    </div>
</body>
</html>

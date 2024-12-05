<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
</head>
<body>
    <h1>Forgot Password</h1>
    <form action="/forgot-password" method="POST">
        @csrf
        <input type="email" placeholder="Enter your email" name="email" required>
        <button type="submit">Send Reset Link</button>
    </form>
    <a href="/login">Back to Login</a>
</body>
</html>

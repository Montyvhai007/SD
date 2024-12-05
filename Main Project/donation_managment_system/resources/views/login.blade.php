<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login Page</h1>
    <form action="/login" method="POST">
        @csrf
        <input type="email" placeholder="Email" name="email" required>
        <input type="password" placeholder="Password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <a href="/forgot-password">Forgot Password?</a>
    <a href="/signup">Don't have an account? Sign up</a>
</body>
</html>

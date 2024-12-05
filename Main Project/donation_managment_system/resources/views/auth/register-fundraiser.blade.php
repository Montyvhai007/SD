<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up as Fundraiser</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="container">
        <h2>Sign Up as Fundraiser</h2>
        <form action="{{ url('/fundraiser/signup') }}" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required><br>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" required><br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required><br>

            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required><br>

            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>

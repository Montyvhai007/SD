<!-- resources/views/signup_fundraiser.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundraiser Sign Up</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="signup-page">
    <div class="form-container">
        <h1>Fundraiser Sign Up</h1>
        <form method="POST" action="{{ route('register.fundraiser') }}">
            @csrf
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit" class="btn">Sign Up</button>
        </form>
        <p><a href="{{ route('login.fundraiser') }}">Already have an account? Log in</a></p>
        <p><a href="{{ route('password.request') }}">Forgot Password?</a></p>
    </div>
</body>

</html>

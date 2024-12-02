<!-- resources/views/choose_role.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Your Role</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="role-selection">
    <div class="role-container">
        <h1>Choose Your Role</h1>
        <div class="role-box">
            <h2>Fundraiser</h2>
            <p>If you're looking to raise funds for a cause, click below to sign up or log in.</p>
            <a href="{{ route('signup.fundraiser') }}" class="btn">Sign Up</a>
            <a href="{{ route('login.fundraiser') }}" class="btn">Login</a>
        </div>
        <div class="role-box">
            <h2>Donor</h2>
            <p>Want to donate? Click below to become a donor or log in.</p>
            <a href="{{ route('signup.donor') }}" class="btn">Sign Up</a>
            <a href="{{ route('login.donor') }}" class="btn">Login</a>
        </div>
    </div>
</body>

</html>

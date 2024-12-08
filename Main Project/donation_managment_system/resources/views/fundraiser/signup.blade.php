<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundraiser Signup</title>
    <link rel="stylesheet" href="{{ asset('css/select_user.css') }}">
</head>
<body>
    <div class="header">
        <a href="{{ route('donation.list') }}" class="donation-list-link">Donation List</a>
    </div>

    <div class="container">
        <h1>Fundraiser Signup</h1>
        <form action="{{ route('fundraiser.signup.post') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>

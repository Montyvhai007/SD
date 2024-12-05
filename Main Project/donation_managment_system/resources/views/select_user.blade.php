<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select User</title>
    <link rel="stylesheet" href="{{ asset('css/select_user.css') }}">
</head>
<body>
    <div class="header">
        <a href="{{ route('donation.list') }}" class="donation-list-link">Donation List</a>
    </div>

    <div class="container">
        <h1>Select User</h1>
        <div class="tables">
            <!-- Fundraiser Table -->
            <div class="table">
                <h2>Fundraiser</h2>
                <a href="{{ route('fundraiser.login') }}" class="btn">Login as Fundraiser</a>
                <a href="{{ route('fundraiser.signup') }}" class="btn">Sign Up as Fundraiser</a>
            </div>

            <!-- Donor Table -->
            <div class="table">
                <h2>Donor</h2>
                <a href="{{ route('donor.login') }}" class="btn">Login as Donor</a>
                <a href="{{ route('donor.signup') }}" class="btn">Sign Up as Donor</a>
            </div>
        </div>
    </div>
</body>
</html>

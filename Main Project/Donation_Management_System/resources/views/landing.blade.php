<!-- resources/views/landing.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Donation Management System</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body class="landing-page">
    <div class="quote-container">
        <h1>"Make a Difference, One Donation at a Time."</h1>
        <p>Click anywhere to begin</p>
    </div>

    <script>
        document.body.addEventListener('click', function() {
            window.location.href = '{{ route('choose_role') }}';  // Redirect to the next page
        });
    </script>
</body>

</html>

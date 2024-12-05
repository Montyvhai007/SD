<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Management System</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="needy-background">
        <h1 class="quote">"The smallest act of kindness is worth more than the grandest intention."</h1>
    </div>

    <script>
        document.body.addEventListener('click', () => {
            window.location.href = '/select-user';
        });
    </script>
</body>
</html>

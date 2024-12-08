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
        <div class="donation-animation">
            <div class="hand">
                <img src="{{ asset('images/money-bag.png') }}" alt="Hand" class="hand-image">
            </div>
            <div class="coin">
                <img src="{{ asset('images/money.png') }}" alt="Coin" class="coin-image">
            </div>
            <div class="box">
                <img src="{{ asset('images/digital-wallet.png') }}" alt="Donate Box" class="box-image">
            </div>
        </div>
        <h1 class="quote">"The smallest act of kindness is worth more than the grandest intention."</h1>
        <!-- Copyright Notice -->
        <div class="copyright">
            &copy; Assad Himel Saiful Rohit
        </div>
    </div>

    <script>
        document.body.addEventListener('click', () => {
            window.location.href = '/select-user';
        });
    </script>
</body>
</html>

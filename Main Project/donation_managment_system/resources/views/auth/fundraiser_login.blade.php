<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login as Fundraiser</title>
    <style>
        /* General Styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #fff;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Form Container */
        .container {
            background-color: #1e1e1e;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Form Title */
        .container h2 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #4CAF50;
        }

        /* Input Fields */
        .container input {
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 15px;
            border: none;
            border-radius: 5px;
            background-color: #2e2e2e;
            color: #fff;
            font-size: 1rem;
            outline: none;
        }

        /* Labels */
        .container label {
            display: block;
            text-align: left;
            margin-bottom: 5px;
            font-size: 1rem;
            color: #ccc;
        }

        /* Submit Button */
        .container button {
            width: 100%;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: #fff;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s;
        }

        .container button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        /* Links */
        .container a {
            display: block;
            margin-top: 15px;
            color: #00c6ff;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .container a:hover {
            color: #0072ff;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login as Fundraiser</h2>
        <form action="{{ url('/fundraiser/login') }}" method="POST">
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter your email" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>

            <button type="submit">Login</button>
        </form>
        <a href="{{ route('forgot.password') }}">Forgot Password?</a>
        <a href="{{ route('fundraiser.signup') }}">Don't have an account? Sign up here</a>
    </div>
</body>
</html>

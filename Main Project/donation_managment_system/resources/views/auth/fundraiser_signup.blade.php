<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundraiser Signup</title>
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
        .form-container {
            background-color: #1e1e1e;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Form Title */
        .form-container h1 {
            margin-bottom: 20px;
            font-size: 2rem;
            color: #4CAF50;
        }

        /* Input Fields */
        .form-container input {
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

        /* Submit Button */
        .form-container button {
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

        .form-container button:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }

        /* Link Styles */
        .form-container a {
            display: block;
            margin-top: 15px;
            color: #00c6ff;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .form-container a:hover {
            color: #0072ff;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Fundraiser Signup</h1>
        <form action="/fundraiser/signup" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
        <a href="/forgot-password">Forgot Password?</a>
        <a href="/fundraiser/login">Already have an account? Login here</a>
    </div>
</body>
</html>

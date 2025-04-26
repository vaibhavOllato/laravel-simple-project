<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            /* background: linear-gradient(135deg, #06b6d4, #3b82f6); */
            background: linear-gradient(to right, #57385c, #a15f99);

            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            width: 100%;
            max-width: 420px;
            box-sizing: border-box;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #1f2937;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: 600;
            color: #374151;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-top: 6px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            font-size: 16px;
            transition: border-color 0.3s;
        }

        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #57385c;
            outline: none;
        }

        .btn {
            width: 100%;
            background-color: #57385c;
            color: white;
            padding: 12px;
            margin-top: 25px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #6d4a73;
            
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        .footer-text {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .footer-text a {
            color: #6d4a73;
            
            text-decoration: none;
            font-weight: 600;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }

        @media (max-width: 500px) {
            .login-container {
                padding: 30px 20px;
            }
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2>Login</h2>

        @if (session('error'))
    <div class="error">{{ session('error') }}</div>
@endif


        <!-- Display error message if needed -->
        {{-- <div class="error">Invalid email or password.</div> --}}

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" class="btn">Login</button>

            <div class="footer-text">
                Don’t have an account?
                <a href="{{ route('register') }}">Register here</a>
            </div>

            <div class="footer-text">
              Back to Home page
              <a href="{{ url('/') }}">Home</a>
            </div>
        </form>
    </div>

</body>
</html>

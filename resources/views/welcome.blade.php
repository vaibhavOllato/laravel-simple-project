<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: row;
            margin: 0;
        }
        .left-section {
            background-color: #2C3E50;
            color: white;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            font-size: 3rem;
            font-weight: bold;
            text-transform: uppercase;
            box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.3);
        }
        .right-section {
            flex: 1;
            background-color: #ecf0f1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px;
            box-shadow: inset 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .right-section h1 {
            font-size: 2.8rem;
            color: #34495e;
            margin-bottom: 20px;
            text-align: center;
            font-weight: 700;
        }
        .right-section p {
            font-size: 1.2rem;
            color: #7f8c8d;
            margin-bottom: 30px;
            text-align: center;
            line-height: 1.5;
        }
        .btn {
            padding: 15px 30px;
            margin: 15px;
            background-color: #57385c;
            color: white;
            border: none;
            border-radius: 30px;
            font-size: 18px;
            text-align: center;
            text-transform: uppercase;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
            width: 200px;
        }
        .btn:hover {
            background-color: #6d4a73;
            transform: translateY(-5px);
        }
        .btn:active {
            background-color: #6d4a73;
            transform: translateY(2px);
        }
        .footer-text {
            text-align: center;
            margin-top: 30px;
            font-size: 16px;
            color: #34495e;
        }
        .footer-text a {
            color: #06b6d4;
            text-decoration: none;
            font-weight: 700;
        }
        .footer-text a:hover {
            text-decoration: underline;
        }
        @media (max-width: 768px) {
            .left-section {
                font-size: 2.5rem;
            }
            .right-section h1 {
                font-size: 2rem;
            }
            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <div class="left-section">
        <div>
            <span style="font-size: 2.5rem;">Ollato Eduversity</span>
            <div style="font-size: 1.5rem; font-weight: normal;">Pvt. Ltd.</div>
        </div>
    </div>

    <div class="right-section">
        <h1>Welcome to Ollato</h1>
        
        <div>
            <a href="/login" class="btn">Login</a>
            <a href="/register" class="btn">Register</a>
        </div>
        {{-- <div class="footer-text">
            Already have an account? <a href="/login">Login here</a>
        </div> --}}
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f5f7;
        }

        .container {
            display: flex;
            min-height: 100vh;
            width: 100%;
        }

        .sidebar {
            width: 220px;
            background-color: #1D3C6A;
            color: #fff;
            padding: 20px;
            display: flex;
            flex-direction: column;
        }
a{
    margin-top: 6px;
}
        .sidebar h3 {
            font-size: 20px;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            margin-bottom: 12px;
            padding: 8px 12px;
            border-radius: 4px;
            transition: background 0.2s ease;
        }

        .sidebar a:hover {
            background-color: #2d4f83;
        }

        .sidebar form button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            margin-top: auto;
            cursor: pointer;
        }

        .sidebar form button:hover {
            background-color: #c0392b;
        }

        .content {
            flex-grow: 1;
            padding: 30px;
            background-color: #f9fafb;
        }

        .content h1 {
            font-size: 28px;
            margin-bottom: 15px;
            color: #333;
        }

        .content p {
            font-size: 16px;
            color: #555;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                flex-direction: row;
                flex-wrap: wrap;
                align-items: center;
                justify-content: space-between;
            }

            .sidebar a {
                margin: 8px 10px;
                font-size: 14px;
            }

            .sidebar form button {
                margin: 10px auto 0;
                width: 100%;
            }

            .content {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h3>Ollato</h3>
            <hr>
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('profile') }}">Profile</a>
            {{-- <a href="/settings">Settings</a> --}}
              <a href="/settings">Summery report</a>
                <a href="/settings">Report</a>
                {{-- <hr> --}}
            {{-- <a href="{{route('logout')}}">logout</a> --}}

            <form action="{{ route('logout') }}" method="GET">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>

        <!-- Main Content -->
        <div class="content">
            @yield('content')
        </div>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f5f7;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #57385c;
            color: white;
            padding: 20px 30px;
            font-size: 22px;
            font-weight: bold;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .toggle-btn {
            background: white;
            color: #6e5773;
            border: none;
            font-size: 20px;
            padding: 5px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .toggle-btn:hover {
            background-color: #6e5773;
            color: white;
        }

        .header-left {
    display: flex;
    align-items: center;
    gap: 15px;
}
.header-right {
    font-size: 16px;
    font-weight: normal;
}


        .container {
            display: flex;
            transition: all 0.3s ease;
            flex: 1;
            background-color: #f9fafb;
            width: 100%;
        }

        .sidebar {
            width: 220px;
            background-color: #6e5773;
            color: #fff;
            padding: 10px;
            display: flex;
            flex-direction: column;
            transition: width 0.3s ease;
            /* border-right: 2px solid #3b4c66; */
            position: relative;
            overflow: hidden;
        }

        .sidebar.collapsed {
            width: 60px;
        }

        .sidebar h3 {
            font-size: 22px;
            margin-bottom: 30px;
            transition: opacity 0.3s ease;
        }

        .sidebar.collapsed h3 {
            opacity: 0;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
            margin: 12px 0;
            padding: 10px 15px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 16px;
            /* transition: background 0.3s ease, padding-left 0.3s ease; */
        }

        .sidebar a:hover {
            background-color: #57385c;
            padding-left: 25px;
        }

        .sidebar a i {
            font-size: 20px;
         
        }

        

      
        .sidebar.collapsed a {
            justify-content: center;
            padding-left: 0;
        }

        .content {
    flex-grow: 1;
    padding: 30px;
    background-color: #f9fafb;
    display: flex;
    justify-content: center;
    align-items: center; 
}


        .sidebar.collapsed a span {
            display: none; 
        }

       
        .sidebar form button {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            margin-top: auto;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .sidebar form button:hover {
            background-color: #c0392b;
        }

      
        .sidebar a:hover .tooltip {
            visibility: visible;
            opacity: 1;
        }

        .tooltip {
            visibility: hidden;
            opacity: 0;
            position: absolute;
            background-color: #333;
            color: #fff;
            padding: 6px 10px;
            border-radius: 4px;
            font-size: 12px;
            bottom: 10px;
            left: 105%;
            /* transition: visibility 0.2s, opacity 0.3s ease; */
        }

        
        .content {
            flex-grow: 1;
            padding: 30px;
            background-color: #f9fafb;
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .content-wrapper {
            max-width: 1200px;
            width: 100%;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .logout-container {
    margin-top: auto;
    display: flex;
    justify-content: center;
}

.sidebar form button {
    background-color: #e74c3c;
    color: white;
    border: none;
    padding: 12px 20px;
    border-radius: 6px;
    cursor: pointer;
    /* transition: background-color 0.3s ease; */
    width: 100%;
    max-width: 160px; 
}

.sidebar form button:hover {
    background-color: #c0392b;
}


        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                padding: 10px;
                border-right: none;
            }

            .content {
                padding: 20px;
            }

            
        }
    </style>
</head>
<body>

    <!-- 🌐 Header -->
    <header>
        <div class="header-left">
            <span>Ollato</span>
            <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
            {{-- {{ session('user_name') }} --}}
        </div>
        <div class="header-right">
            {{ session('user_name') }}
        </div>
    </header>
    
  
   
    <div class="container">
        <!-- 📌 Sidebar -->
        <div class="sidebar" id="sidebar">
            {{-- <h3>Ollato</h3> --}}

            <a href="{{ route('dashboard') }}">
                <i class="fas fa-home"></i> <span class="link-text">Dashboard</span>
                <span class="tooltip">Dashboard</span>
            </a>

        
            <a href="{{ route('instructions') }}">
                <i class="fas fa-info-circle"></i> <span class="link-text">Assessment</span>
                <span class="tooltip">Assessment</span>
            </a>
            
            <a href="{{ route('profile') }}">
                <i class="fas fa-user"></i> <span class="link-text">Profile</span>
                <span class="tooltip">Profile</span>
            </a>
            <a href="{{ route('settings') }}">
                <i class="fas fa-cog"></i> <span class="link-text">Password reset</span>
                <span class="tooltip">Settings</span>
            </a>


            <div class="logout-container">
                <form action="{{ route('logout') }}" method="GET">
                    @csrf
                    <button type="submit"><i class="fas fa-sign-out-alt"></i> Logout</button>
                </form>
            </div>
            
        </div>

        <!-- 📝 Content Area -->
        <div class="content">
            <div class="content-wrapper">
                @yield('content')
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');
        }
    </script>

</body>
</html>

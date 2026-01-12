<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #e9f0f7; }

        /* Sidebar */
        .sidebar {
            width: 260px;
            min-height: 100vh;
            background-color: #262c58;
        }
        .sidebar .nav-link {
            color: #fff;
            font-size: 15px;
            padding: 12px;
            display: flex;
            align-items: center;
            font-weight: 500;
            border-radius: 8px;
        }
        .sidebar .nav-link img {
            width: 20px;
            margin-right: 10px;
            filter: brightness(0) invert(1);
        }
        .sidebar .nav-link.active,
        .sidebar .nav-link:hover {
            background: #f697087f;
            color: #fff;
        }

        /* Navbar toggler icon */
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%28255, 255, 255, 1%29' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        /* Top Bar */
        .topbar {
            background-color: #d3dce6; 
            padding: 15px 20px;
            border-radius: 8px;
            margin-bottom: 15px;
        }
        .topbar h5 {
            margin: 0;
            font-weight: 600;
            color: #333;
        }

        /* Search Box */
        .search-wrapper {
            position: relative;
            width: 260px;
        }
        .search-input {
            width: 100%;
            padding: 6px 35px 6px 12px;
            border: none;
            border-radius: 6px;
            background-color: #1a2a6c;
            color: #fff;
            font-size: 14px;
        }
        .search-input::placeholder {
            color: #ccc;
            font-weight: 400;
        }
        .search-icon {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
            filter: brightness(0) invert(1);
            pointer-events: none;
        }

        /* Cards */
        .card {
            border-radius: 8px;
        }
        .card h4 {
            font-weight: 600;
        }
        .card h1, .card h2 {
            font-weight: 700;
        }
        .card small {
            font-weight: 400;
        }

        /* Progress Bars */
        .progress {
            height: 8px;
            background-color: #e0e0e0;
            border-radius: 5px;
        }
        .progress-bar {
            border-radius: 5px;
        }

        /* Breadcrumb */
        .breadcrumb {
            background: transparent;
            padding: 0;
            margin-bottom: 10px;
            font-size: 14px;
        }

        <!-- Add hover CSS for Add New buttons -->

    .add-new-btn {
        color: #000671ff;
        transition: background-color 0.3s, color 0.3s;
    }
    .add-new-btn:hover {
        background-color: #d3d3d3; 
        color: #000671ff; 
    }

    </style>
</head>
<body>
<div class="d-flex">
    <!-- Sidebar -->
    <aside class="sidebar p-3 text-white">
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
    <a href="{{ route('dashboard') }}" class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
        <img src="{{ asset('icons/home-icon-silhouette.svg') }}" alt="Dashboard"> Dashboard
    </a>
</li>
            <li class="nav-item mb-2">
    <a href="{{ route('content.index') }}" class="nav-link {{ request()->routeIs('content.index') ? 'active' : '' }}">
        <img src="{{ asset('icons/digital-content_16705862.svg') }}" alt="Content"> Content Management
    </a>
</li>


<li class="nav-item mb-2">
    <!--<a href="{{ route('qr.index') }}">QR Management</a>-->
    <a href="{{ route('qr.index') }}" class="nav-link {{ request()->routeIs('qr.index') ? 'active' : '' }}">
        <img src="{{ asset('icons/qr-code_3037065.svg') }}" alt="QR"> QR Management
    </a>
</li>

            <li class="nav-item mb-2">
                <a href="#" class="nav-link">
                    <img src="{{ asset('icons/elearning_5310949.svg') }}" alt="E-Learning"> E-Learning Management
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link">
                    <img src="{{ asset('icons/group_8690855.svg') }}" alt="Users"> Users
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link">
                    <img src="{{ asset('icons/analytics_2907836.svg') }}" alt="Analytics"> Analytics & Reporting
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link">
                    <img src="{{ asset('icons/technical-support_4555109.svg') }}" alt="Community"> Community Moderation
                </a>
            </li>
            <li class="nav-item mb-2">
                <a href="#" class="nav-link">
                    <img src="{{ asset('icons/web_13737621.svg') }}" alt="Settings"> System Settings
                </a>
            </li>

            <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
                <button type="submit" class="btn btn-danger btn-sm w-100 d-flex align-items-center justify-content-center">
                    <i class="fas fa-sign-out-alt me-2"></i> Logout
                </button>
            </form>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="flex-grow-1 p-4">
        <!-- Top Bar -->
        <div class="topbar d-flex justify-content-between align-items-center">
            <h5>Good morning, {{ auth()->user()->name ?? 'User' }}!</h5>

            <!-- Search Box -->
            <div class="search-wrapper">
                <input type="text" class="form-control search-input" placeholder="Search...">
                <img src="{{ asset('icons/search.svg') }}" alt="Search" class="search-icon">
            </div>
        </div>

        @yield('content')
    </main>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

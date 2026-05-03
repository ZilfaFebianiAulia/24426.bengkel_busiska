<!DOCTYPE html>
<html>
<head>
    <title>Bengkel Bu Siska</title>
    <style>
        body {
            font-family: Arial;
            margin: 0;
        }
        header {
            background: #e53935;
            color: white;
            padding: 15px;
        }
        nav {
            background: #333;
            padding: 10px;
        }
        nav a {
            color: white;
            margin-right: 15px;
            text-decoration: none;
        }
        .content {
            padding: 20px;
        }
    </style>
</head>
<body>

<header>
    <h2>Bengkel Bu Siska</h2>
    <p>Halo, {{ session('username') }} ({{ session('role') }})</p>
</header>

<nav>
    @if(session('role') == 'admin')
        <a href="/admin">Dashboard</a>
        <a href="#">Data User</a>
        <a href="#">Data Servis</a>
    @elseif(session('role') == 'user')
        <a href="/user">Dashboard</a>
        <a href="#">Booking Servis</a>
    @elseif(session('role') == 'mekanik')
        <a href="/mekanik">Dashboard</a>
        <a href="#">Daftar Servis</a>
    @endif

    <a href="/logout">Logout</a>
</nav>

<div class="content">
    @yield('content')
</div>

</body>
</html>
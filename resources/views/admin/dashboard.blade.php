<style>
.sidebar {
    width:250px;
    height:100vh;
    background:#7a0606;
    color:white;
    position:fixed;
    top:0;
    left:0;
    padding:25px;
}

h3 {
    font-size: 30px;
}

.menu-item {
    display: block;
    padding: 10px 15px;
    border-radius: 8px;
    color: white;
    text-decoration: none;
    transition: 0.2s;
}

.menu-item:hover {
    background: #ffa200;
    color: black;
}
</style>

<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
    <h3 class="fw-bold mb-4">Admin Dashboard</h3>

    <!-- MENU -->
    <div class="d-flex flex-column gap-2">
        <a href="/admin" class="menu-item">🏠 Dashboard</a>
        <a href="/admin/barang" class="menu-item">📦 Data Barang</a>
        <a href="/admin/transaksi" class="menu-item">💳 Data Transaksi</a>
        <a href="/admin/pelanggan" class="menu-item">👤 Data Pelanggan</a>

    </div>

    <!-- LOGOUT DI BAWAH -->
    <div style="position:absolute; bottom:30px; left:25px; right:25px;">
        <a href="/logout" class="btn btn-warning w-100">
            Logout
        </a>
    </div>

</div>
</body>
</html>


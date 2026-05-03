<nav class="navbar navbar-expand-lg shadow-sm" style="background:#7a0606;">
    <div class="container">

        <!-- LOGO + NAMA -->
        <a class="navbar-brand d-flex align-items-center text-white" href="/home">
            <div style="
                width:35px;
                height:35px;
                background:#ffa200;
                border-radius:50%;
                margin-right:10px;">
            </div>
            <strong>BengkelKu</strong>
        </a>

        <!-- MENU -->
        <ul class="navbar-nav me-auto ms-4">
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('home') ? 'fw-bold' : '' }}" href="/home">
                    Home
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('pesanan') ? 'fw-bold' : '' }}" href="/pesanan">
                    Pesanan
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white {{ request()->is('transaksi') ? 'fw-bold' : '' }}" href="/transaksi">
                    Transaksi
                </a>
            </li>
        </ul>

        <!-- KANAN (SEARCH + USER) -->
        <div class="d-flex align-items-center gap-3">

            <!-- SEARCH -->
            <form action="#" method="GET" class="d-flex">
                <input type="text" name="search" placeholder="Cari..."
                    style="border:none; padding:5px 10px; border-radius:5px;">
            </form>

            <!-- USER -->
            <div class="d-flex align-items-center ms-auto gap-3">
            <span class="text-white fw-semibold">
                👤 Halo, {{ session('username') ?? 'User' }}
            </span>

            <a href="/logout" class="btn btn-warning btn-sm">
                Logout
            </a>

        </div>

    </div>
</nav>
<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="../assets/index3.html" class="navbar-brand">
            <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Aplikasi Pengelolaan Laundry</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Data Master</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="outlet.php" class="dropdown-item">Data Outlet</a></li>
                        <li><a href="paket.php" class="dropdown-item">Data Paket</a></li>
                        <li><a href="pengguna.php" class="dropdown-item">Data Pengguna</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="pelanggan.php" class="nav-link">Registrasi Pelanggan</a>
                </li>
                <li class="nav-item">
                    <a href="transaksi.php" class="nav-link">Entri Transaksi</a>
                </li>
                <li class="nav-item">
                    <a href="laporan.php" class="nav-link">Laporan</a>
                </li>
            </ul>
        </div>

        <!-- Right navbar links -->
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-user"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- /.navbar -->
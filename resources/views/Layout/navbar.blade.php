<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SEPAK</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            background-color: #264191;
        }

        .sidebar .nav-link {
            color: white;
            border-radius: 8px;
            padding: 10px 16px;
            transition: all 0.2s ease-in-out;
        }

        
        .sidebar .nav-link:hover {
            background-color: white;
            color: #264191 !important;
        }

        
        .sidebar .nav-link.active {
            background-color: transparent;
            color: white;
        }

        
        .sidebar .nav-link.active:hover {
            background-color: white;
            color: #264191 !important;
        }
            </style>
</head>

<body>

    <div class="d-flex">

        <!-- Ditambahkan class sidebar dan mengganti text-bg-primary menjadi text-white -->
        <aside class="sidebar d-flex flex-column flex-shrink-0 p-3 text-white min-vh-100" style="width: 250px;">

            <a href="#" class="d-flex align-items-center mb-4 text-white text-decoration-none">
                <span class="fs-4 fw-bold">SEPAK</span>
            </a>

            <hr>

        <ul class="nav nav-pills flex-column mb-auto gap-2">

            <li class="nav-item">
                <a href="#" class="nav-link active">
                    Dashboard
                </a>
            </li>

            <li>
                <a href="#" class="nav-link">
                    Manajemen Barang
                </a>
            </li>

            <li>
                <a href="#" class="nav-link">
                    Manajemen Pengguna
                </a>
            </li>

            <li>
                <a href="#" class="nav-link">
                    Peminjaman
                </a>
            </li>
           <li>
                <a href="#" class="nav-link">
                    Persetujuan
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    Pengembalian
                </a>
            </li>
                        <li>
                <a href="#" class="nav-link">
                    Laporan
                </a>
            </li>
                        <li>
                <a href="#" class="nav-link">
                    Tentang Kami
                </a>
            </li>
        </ul>

            <hr>

            <div class="text-white">
                <small>© 2026 SEPAK</small>
            </div>

        </aside>

        <main class="flex-grow-1 p-4">

            <h1>Dashboard</h1>

            <p>
                Selamat datang di website SEPAK.
            </p>

            @yield('navbar')

        </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
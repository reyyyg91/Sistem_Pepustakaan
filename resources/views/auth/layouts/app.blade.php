<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Perpustakaan Digital')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Poppins', sans-serif;
        }

        /* Sidebar */
        .sidebar {
            height: 100vh;
            background-color: #3e2723;
            color: #fff;
            position: fixed;
            width: 230px;
            padding-top: 25px;
            transition: all 0.3s ease;
        }

        .sidebar h4 {
            font-weight: 600;
            text-align: center;
            margin-bottom: 40px;
            color: #ffc107;
        }

        .sidebar a {
            color: #ddd;
            text-decoration: none;
            display: block;
            padding: 12px 20px;
            margin: 5px 15px;
            border-radius: 10px;
            transition: all 0.3s;
        }

        .sidebar a:hover, .sidebar a.active {
            background-color: #5d4037;
            color: #fff;
        }

        .sidebar i {
            margin-right: 8px;
        }

        /* Navbar */
        .navbar-custom {
            background-color: #795548;
            margin-left: 230px;
            padding: 10px 25px;
            color: white;
        }

        .navbar-custom .btn-logout {
            background: #ff7043;
            border: none;
        }

        .navbar-custom .btn-logout:hover {
            background: #e64a19;
        }

        /* Content area */
        .content {
            margin-left: 230px;
            padding: 30px;
        }

        /* Responsive */
        @media (max-width: 991px) {
            .sidebar {
                position: relative;
                height: auto;
                width: 100%;
            }
            .navbar-custom {
                margin-left: 0;
            }
            .content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>

    {{-- Sidebar --}}
    <div class="sidebar">
        <h4>📚 Perpustakaan</h4>

        {{-- Cek Role Pengguna --}}
        @if (session('user.level') === 'admin')
            <a href="{{ route('dashboard.admin') }}" class="{{ request()->routeIs('dashboard.admin') ? 'active' : '' }}">
                <i class="bi bi-house"></i> Dashboard
            </a>

            <a href="{{ route('kelola.buku') }}" class="{{ request()->routeIs('kelola.buku') ? 'active' : '' }}">
                <i class="bi bi-book"></i> Kelola Buku
            </a>

            <a href="{{ route('kelola.anggota') }}" class="{{ request()->routeIs('kelola.anggota') ? 'active' : '' }}">
                <i class="bi bi-people"></i> Kelola Anggota
            </a>

            <a href="{{ route('kelola.peminjaman') }}" class="{{ request()->routeIs('kelola.peminjaman') ? 'active' : '' }}">
                <i class="bi bi-arrow-left-right"></i> Kelola Peminjaman
            </a>

            <a href="{{ route('kelola.laporan') }}" class="{{ request()->routeIs('kelola.laporan') ? 'active' : '' }}">
                <i class="bi bi-file-earmark-text"></i> Lihat Laporan
            </a>

        @elseif (session('user.level') === 'pengunjung')
            <a href="{{ route('dashboard.pengunjung') }}" class="{{ request()->routeIs('dashboard.pengunjung') ? 'active' : '' }}">
                <i class="bi bi-house"></i> Dashboard
            </a>

            <a href="#" class="{{ request()->routeIs('buku.katalog') ? 'active' : '' }}">
                <i class="bi bi-collection"></i> Lihat Katalog
            </a>

            <a href="#" class="{{ request()->routeIs('buku.pinjam') ? 'active' : '' }}">
                <i class="bi bi-journal-arrow-down"></i> Pinjam Buku
            </a>

            <a href="#" class="{{ request()->routeIs('status.peminjaman') ? 'active' : '' }}">
                <i class="bi bi-info-circle"></i> Lihat Status
            </a>
        @endif

        <a href="{{ route('logout') }}" class="text-danger mt-3 d-block">
            <i class="bi bi-box-arrow-right"></i> Logout
        </a>
    </div>

    {{-- Navbar --}}
    <nav class="navbar navbar-custom d-flex justify-content-between align-items-center">
        <span class="fw-semibold">
            {{ session('user.name') ?? 'Pengguna' }} 👋
        </span>
    </nav>

    {{-- Main Content --}}
    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

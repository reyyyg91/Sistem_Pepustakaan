@extends('auth.layouts.app')

@section('content')
<style>
    body {
        background-color: #f9f6f1;
        font-family: 'Poppins', sans-serif;
    }

    .dashboard-container {
        padding: 60px 0;
        text-align: center;
    }

    .dashboard-title {
        font-weight: 700;
        color: #4a3422;
        margin-bottom: 10px;
        font-size: 2rem;
    }

    .dashboard-quote {
        color: #7b6a58;
        font-style: italic;
        margin-bottom: 50px;
        font-size: 1rem;
    }

    .menu-card {
        background: #fff;
        border-radius: 18px;
        padding: 30px;
        margin: 15px auto;
        box-shadow: 0 8px 18px rgba(0, 0, 0, 0.08);
        width: 260px;
        transition: 0.3s;
    }

    .menu-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.12);
    }

    .menu-icon {
        font-size: 2.2rem;
        color: #a66e3e;
        margin-bottom: 10px;
    }

    .menu-title {
        font-size: 1.1rem;
        color: #4a3422;
        font-weight: 600;
    }

    .logout-btn {
        margin-top: 30px;
        background: #c0392b;
        border: none;
        color: white;
        padding: 10px 25px;
        border-radius: 8px;
        font-weight: 600;
        transition: 0.3s;
    }

    .logout-btn:hover {
        background: #a93226;
    }
</style>

<div class="container dashboard-container">
    Selamat Datang, {{ session('user.name') }} 👋
    <p class="dashboard-quote">Temukan, pinjam, dan nikmati bacaan terbaik di Perpustakaan Digital 📚</p>

    <div class="row justify-content-center">

        {{-- Menu Cari Buku --}}
        <div class="col-md-3">
            <a href="#" class="text-decoration-none">
                <div class="menu-card">
                    <i class="bi bi-search menu-icon"></i>
                    <div class="menu-title">Cari Buku</div>
                </div>
            </a>
        </div>

        {{-- Menu Pinjam Buku --}}
        <div class="col-md-3">
            <a href="#" class="text-decoration-none">
                <div class="menu-card">
                    <i class="bi bi-journal-arrow-down menu-icon"></i>
                    <div class="menu-title">Pinjam Buku</div>
                </div>
            </a>
        </div>

        {{-- Menu Kembalikan Buku --}}
        <div class="col-md-3">
            <a href="#" class="text-decoration-none">
                <div class="menu-card">
                    <i class="bi bi-arrow-repeat menu-icon"></i>
                    <div class="menu-title">Kembalikan Buku</div>
                </div>
            </a>
        </div>

        {{-- Menu Lihat Daftar Buku --}}
        <div class="col-md-3">
            <a href="#" class="text-decoration-none">
                <div class="menu-card">
                    <i class="bi bi-collection menu-icon"></i>
                    <div class="menu-title">Lihat Daftar Buku</div>
                </div>
            </a>
        </div>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
@endsection

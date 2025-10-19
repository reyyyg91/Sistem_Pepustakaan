@extends('auth.layouts.app')
@section('title', 'Kelola Laporan')

@section('content')
<div class="card card-modern p-4">
    <h4 class="fw-bold text-primary mb-3"><i class="bi bi-file-earmark-text me-2"></i>Laporan Perpustakaan</h4>

    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Buku</h5>
                    <h2 class="card-text">150</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body text-center">
                    <h5 class="card-title">Total Anggota</h5>
                    <h2 class="card-text">75</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-white">
                <div class="card-body text-center">
                    <h5 class="card-title">Buku Dipinjam</h5>
                    <h2 class="card-text">25</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-info text-white">
                <div class="card-body text-center">
                    <h5 class="card-title">Buku Tersedia</h5>
                    <h2 class="card-text">125</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Laporan Peminjaman Bulan Ini</h5>
                </div>
                <div class="card-body">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Buku</th>
                                <th>Anggota</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2025-01-27</td>
                                <td>Pemrograman Web</td>
                                <td>John Doe</td>
                                <td><span class="badge bg-success">Dikembalikan</span></td>
                            </tr>
                            <tr>
                                <td>2025-01-26</td>
                                <td>Database Design</td>
                                <td>Jane Smith</td>
                                <td><span class="badge bg-warning">Dipinjam</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Statistik Kategori Buku</h5>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <div class="d-flex justify-content-between">
                            <span>Teknologi</span>
                            <span>45 buku</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar" style="width: 30%"></div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="d-flex justify-content-between">
                            <span>Sastra</span>
                            <span>35 buku</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-success" style="width: 23%"></div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="d-flex justify-content-between">
                            <span>Sejarah</span>
                            <span>30 buku</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-warning" style="width: 20%"></div>
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="d-flex justify-content-between">
                            <span>Lainnya</span>
                            <span>40 buku</span>
                        </div>
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar bg-info" style="width: 27%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <button class="btn btn-primary me-2">
            <i class="bi bi-download me-1"></i> Export PDF
        </button>
        <button class="btn btn-success me-2">
            <i class="bi bi-file-excel me-1"></i> Export Excel
        </button>
        <button class="btn btn-info">
            <i class="bi bi-printer me-1"></i> Print
        </button>
    </div>
</div>
@endsection

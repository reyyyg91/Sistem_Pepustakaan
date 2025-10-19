@extends('auth.layouts.app')
@section('title', 'Kelola Buku')

@section('content')
<div class="card card-modern p-4">
    <h4 class="fw-bold text-primary mb-3"><i class="bi bi-journal-text me-2"></i>Kelola Buku</h4>

    <form method="POST" action="{{ route('buku.store') }}">
        @csrf
        <div class="row g-3">
            <div class="col-md-4">
                <label>Judul Buku</label>
                <input type="text" name="judul" class="form-control" placeholder="Masukkan judul buku">
            </div>
            <div class="col-md-4">
                <label>Penulis</label>
                <input type="text" name="penulis" class="form-control" placeholder="Nama penulis">
            </div>
            <div class="col-md-4">
                <label>Tahun Terbit</label>
                <input type="number" name="tahun" class="form-control" placeholder="2025">
            </div>
        </div>
        <button class="btn btn-primary mt-4"><i class="bi bi-save me-1"></i> Simpan Buku</button>
    </form>
</div>
@endsection

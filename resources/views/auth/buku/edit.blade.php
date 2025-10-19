@extends('auth.layouts.app')
@section('title', 'Edit Buku')

@section('content')
<div class="card card-modern p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-primary mb-0"><i class="bi bi-pencil me-2"></i>Edit Buku</h4>
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>

    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <form method="POST" action="{{ route('buku.update', $buku->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Judul Buku <span class="text-danger">*</span></label>
                <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror"
                       value="{{ old('judul', $buku->judul) }}" placeholder="Masukkan judul buku" required>
                @error('judul')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Pengarang <span class="text-danger">*</span></label>
                <input type="text" name="pengarang" class="form-control @error('pengarang') is-invalid @enderror"
                       value="{{ old('pengarang', $buku->pengarang) }}" placeholder="Nama pengarang" required>
                @error('pengarang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Penerbit <span class="text-danger">*</span></label>
                <input type="text" name="penerbit" class="form-control @error('penerbit') is-invalid @enderror"
                       value="{{ old('penerbit', $buku->penerbit) }}" placeholder="Nama penerbit" required>
                @error('penerbit')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Tahun Terbit <span class="text-danger">*</span></label>
                <input type="number" name="tahun" class="form-control @error('tahun') is-invalid @enderror"
                       value="{{ old('tahun', $buku->tahun) }}" placeholder="2025" min="1900" max="2025" required>
                @error('tahun')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Stok <span class="text-danger">*</span></label>
                <input type="number" name="stok" class="form-control @error('stok') is-invalid @enderror"
                       value="{{ old('stok', $buku->stok) }}" placeholder="0" min="0" required>
                @error('stok')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Cover Buku</label>
                <input type="file" name="cover" class="form-control @error('cover') is-invalid @enderror"
                       accept="image/*">
                <div class="form-text">Format: JPG, PNG, GIF. Maksimal 2MB</div>
                @if($buku->cover)
                    <div class="mt-2">
                        <small class="text-muted">Cover saat ini:</small><br>
                        <img src="{{ asset('storage/' . $buku->cover) }}" alt="Cover" class="img-thumbnail" style="width: 100px; height: 140px; object-fit: cover;">
                    </div>
                @endif
                @error('cover')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary me-2">
                <i class="bi bi-save me-1"></i> Update Buku
            </button>
            <a href="{{ route('buku.index') }}" class="btn btn-secondary">
                <i class="bi bi-x-circle me-1"></i> Batal
            </a>
        </div>
    </form>
</div>
@endsection

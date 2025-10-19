@extends('auth.layouts.app')
@section('title', 'Tambah Anggota')

@section('content')
<div class="card card-modern p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-primary mb-0"><i class="bi bi-person-plus me-2"></i>Tambah Anggota Baru</h4>
        <a href="{{ route('anggota.index') }}" class="btn btn-secondary">
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

    <form method="POST" action="{{ route('anggota.store') }}">
        @csrf
        <div class="row g-3">
            <div class="col-md-6">
                <label class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                       value="{{ old('nama') }}" placeholder="Masukkan nama lengkap" required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">NIM/NIS <span class="text-danger">*</span></label>
                <input type="text" name="nim_nis" class="form-control @error('nim_nis') is-invalid @enderror"
                       value="{{ old('nim_nis') }}" placeholder="Masukkan NIM atau NIS" required>
                @error('nim_nis')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Kelas/Jurusan <span class="text-danger">*</span></label>
                <input type="text" name="kelas_jurusan" class="form-control @error('kelas_jurusan') is-invalid @enderror"
                       value="{{ old('kelas_jurusan') }}" placeholder="Contoh: XII IPA 1 atau Teknik Informatika" required>
                @error('kelas_jurusan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="form-label">Kontak <span class="text-danger">*</span></label>
                <input type="text" name="kontak" class="form-control @error('kontak') is-invalid @enderror"
                       value="{{ old('kontak') }}" placeholder="No. HP atau Email" required>
                @error('kontak')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary me-2">
                <i class="bi bi-save me-1"></i> Simpan Anggota
            </button>
            <a href="{{ route('anggota.index') }}" class="btn btn-secondary">
                <i class="bi bi-x-circle me-1"></i> Batal
            </a>
        </div>
    </form>
</div>
@endsection

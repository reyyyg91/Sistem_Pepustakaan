@extends('auth.layouts.app')
@section('title', 'Detail Anggota')

@section('content')
<div class="card card-modern p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-primary mb-0"><i class="bi bi-person me-2"></i>Detail Anggota</h4>
        <a href="{{ route('anggota.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="bg-light d-flex align-items-center justify-content-center rounded shadow" style="height: 300px;">
                <i class="bi bi-person-circle text-muted" style="font-size: 6rem;"></i>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-borderless">
                <tr>
                    <td class="fw-bold" style="width: 150px;">Nama Lengkap</td>
                    <td>{{ $anggota->nama }}</td>
                </tr>
                <tr>
                    <td class="fw-bold">NIM/NIS</td>
                    <td>{{ $anggota->nim_nis }}</td>
                </tr>
                <tr>
                    <td class="fw-bold">Kelas/Jurusan</td>
                    <td>{{ $anggota->kelas_jurusan }}</td>
                </tr>
                <tr>
                    <td class="fw-bold">Kontak</td>
                    <td>{{ $anggota->kontak }}</td>
                </tr>
                <tr>
                    <td class="fw-bold">Tanggal Daftar</td>
                    <td>{{ $anggota->created_at->format('d M Y, H:i') }}</td>
                </tr>
                <tr>
                    <td class="fw-bold">Terakhir Diupdate</td>
                    <td>{{ $anggota->updated_at->format('d M Y, H:i') }}</td>
                </tr>
            </table>

            <div class="mt-4">
                <a href="{{ route('anggota.edit', $anggota->id) }}" class="btn btn-warning me-2">
                    <i class="bi bi-pencil me-1"></i> Edit Anggota
                </a>
                <form action="{{ route('anggota.destroy', $anggota->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus anggota ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash me-1"></i> Hapus Anggota
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

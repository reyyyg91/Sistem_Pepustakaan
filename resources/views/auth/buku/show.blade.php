@extends('auth.layouts.app')
@section('title', 'Detail Buku')

@section('content')
<div class="card card-modern p-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold text-primary mb-0"><i class="bi bi-book me-2"></i>Detail Buku</h4>
        <a href="{{ route('buku.index') }}" class="btn btn-secondary">
            <i class="bi bi-arrow-left me-1"></i> Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-md-4">
            @if($buku->cover)
                <img src="{{ asset('storage/' . $buku->cover) }}" alt="Cover" class="img-fluid rounded shadow" style="max-height: 400px; object-fit: cover;">
            @else
                <div class="bg-light d-flex align-items-center justify-content-center rounded shadow" style="height: 400px;">
                    <i class="bi bi-book text-muted" style="font-size: 4rem;"></i>
                </div>
            @endif
        </div>
        <div class="col-md-8">
            <table class="table table-borderless">
                <tr>
                    <td class="fw-bold" style="width: 150px;">Judul Buku</td>
                    <td>{{ $buku->judul }}</td>
                </tr>
                <tr>
                    <td class="fw-bold">Pengarang</td>
                    <td>{{ $buku->pengarang }}</td>
                </tr>
                <tr>
                    <td class="fw-bold">Penerbit</td>
                    <td>{{ $buku->penerbit }}</td>
                </tr>
                <tr>
                    <td class="fw-bold">Tahun Terbit</td>
                    <td>{{ $buku->tahun }}</td>
                </tr>
                <tr>
                    <td class="fw-bold">Stok</td>
                    <td>
                        <span class="badge {{ $buku->stok > 0 ? 'bg-success' : 'bg-danger' }} fs-6">
                            {{ $buku->stok }} {{ $buku->stok > 1 ? 'buku' : 'buku' }}
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="fw-bold">Tanggal Ditambahkan</td>
                    <td>{{ $buku->created_at->format('d M Y, H:i') }}</td>
                </tr>
                <tr>
                    <td class="fw-bold">Terakhir Diupdate</td>
                    <td>{{ $buku->updated_at->format('d M Y, H:i') }}</td>
                </tr>
            </table>

            <div class="mt-4">
                <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-warning me-2">
                    <i class="bi bi-pencil me-1"></i> Edit Buku
                </a>
                <form action="{{ route('buku.destroy', $buku->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus buku ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash me-1"></i> Hapus Buku
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('auth.layouts.app')
@section('content')

<style>
    body {
        background-color: #f4f1ea;
        font-family: 'Poppins', sans-serif;
    }

    .dashboard-container {
        padding: 50px 0;
    }

    .dashboard-title {
        font-weight: 700;
        color: #5a3e2b;
        text-align: center;
        margin-bottom: 10px;
        font-size: 1.9rem;
        letter-spacing: 0.5px;
    }

    .dashboard-subtitle {
        text-align: center;
        color: #7b6650;
        font-style: italic;
        margin-bottom: 50px;
        font-size: 0.95rem;
    }

    .activity-card {
        background-color: #fff;
        border-radius: 18px;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
        padding: 30px;
    }

    .activity-title {
        font-weight: 600;
        color: #5a3e2b;
        font-size: 1.3rem;
        margin-bottom: 25px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    table thead {
        background-color: #b88954;
        color: white;
    }

    table th, table td {
        padding: 12px 15px;
        text-align: left;
        font-size: 0.95rem;
    }

    table tbody tr:nth-child(even) {
        background-color: #f9f4ef;
    }

    table tbody tr:hover {
        background-color: #f0e4d7;
        transition: 0.3s;
    }

    .no-data {
        text-align: center;
        padding: 30px;
        color: #8b7b6b;
    }

</style>

<div class="container dashboard-container">
    <h3 class="dashboard-title">Selamat Datang di Perpustakaan Digital 📚</h3>
    <p class="dashboard-subtitle">"Tempat di mana setiap halaman membuka jendela baru menuju pengetahuan."</p>

    <div class="activity-card">
        <h5 class="activity-title">Aktivitas Terbaru</h5>

        {{-- Contoh Tabel History --}}
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Pengguna</th>
                    <th>Aktivitas</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                {{-- Jika ada data --}}
                @if(isset($activities) && count($activities) > 0)
                    @foreach($activities as $index => $activity)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $activity->user_name }}</td>
                            <td>{{ $activity->action }}</td>
                            <td>{{ $activity->created_at->format('d M Y, H:i') }}</td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="no-data">Belum ada aktivitas terbaru.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>

{{-- Font dan Icon --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

@endsection

@extends('auth.layouts.app')
@section('title', 'Riwayat Aktivitas')
@section('content')
<div class="container mt-5">
    <h3>Riwayat Aktivitas</h3>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>No</th>
                <th>Aktivitas</th>
                <th>Tanggal</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($history) && count($history) > 0)
                @foreach($history as $i => $item)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $item['aktivitas'] }}</td>
                    <td>{{ $item['tanggal'] }}</td>
                    <td>{{ $item['status'] }}</td>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="4" class="text-center">Belum ada riwayat aktivitas.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>
@endsection

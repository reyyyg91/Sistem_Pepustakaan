<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Tampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'level' => 'required',
        ]);

        // Login sederhana
        if ($request->username === 'admin' && $request->password === '123' && $request->level === 'admin') {
            Session::put('user', ['name' => 'Admin', 'level' => 'admin']);
            return redirect()->route('dashboard.admin');
        } elseif ($request->username === 'pengunjung' && $request->password === '123' && $request->level === 'pengunjung') {
            Session::put('user', ['name' => 'Pengunjung', 'level' => 'pengunjung']);
            return redirect()->route('dashboard.pengunjung');
        } else {
            return back()->with('error', 'Username, password, atau level salah!');
        }
    }

    // Logout
    public function logout()
    {
        Session::forget('user');
        return redirect()->route('login')->with('success', 'Berhasil logout!');
    }

    // Dashboard admin
    public function dashboardAdmin()
    {
        return view('auth.dashboard-admin');
    }

    // Dashboard pengunjung
    public function dashboardPengunjung()
    {
        return view('auth.dashboard-pengunjung');
    }

    // Kelola Buku
    public function kelolaBuku()
    {
        return redirect()->route('buku.index');
    }

    // Kelola Anggota
    public function kelolaAnggota()
    {
        return redirect()->route('anggota.index');
    }

    // Kelola Laporan
    public function kelolaLaporan()
    {
        return view('auth.kelola-laporan');
    }

    // History
    public function history()
    {
        // Data dummy untuk history
        $history = [
            [
                'aktivitas' => 'Login ke sistem',
                'tanggal' => '2025-01-27 10:30:00',
                'status' => 'Berhasil'
            ],
            [
                'aktivitas' => 'Menambah data buku baru',
                'tanggal' => '2025-01-27 10:35:00',
                'status' => 'Berhasil'
            ],
            [
                'aktivitas' => 'Mengupdate data anggota',
                'tanggal' => '2025-01-27 11:00:00',
                'status' => 'Berhasil'
            ]
        ];

        return view('auth.history', compact('history'));
    }
}

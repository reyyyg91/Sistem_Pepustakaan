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
        return view('auth.kelola-buku');
    }

    // Kelola Anggota
    public function kelolaAnggota()
    {
        return view('auth.kelola-anggota');
    }

    // Kelola Laporan
    public function kelolaLaporan()
    {
        return view('auth.kelola-laporan');
    }

    // History
    public function history()
    {
        return view('auth.history');
    }
}

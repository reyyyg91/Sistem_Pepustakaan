<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Sistem Informasi Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f2c7;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-card {
            border-radius: 20px;
            background: #fff;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .btn-login {
            background-color: #d6c27d;
            color: white;
            transition: 0.3s;
        }
        .btn-login:hover {
            background-color: #c0aa60;
        }
    </style>
</head>
<body>

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="login-card p-4 text-center" style="max-width: 360px; width: 100%;">
        <img src="{{ asset('img/logo.png') }}" alt="Logo" style="width: 65px; margin-bottom: 10px;">
        <h6 class="fw-semibold mb-3" style="color: #5b4e16;">Aplikasi Perpustakaan</h6>

        {{-- Alert --}}
        @if (session('error'))
            <div class="alert alert-danger small py-1">{{ session('error') }}</div>
        @elseif (session('success'))
            <div class="alert alert-success small py-1">{{ session('success') }}</div>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf
            <div class="mb-2 text-start">
                <label class="form-label mb-1">Username</label>
                <input type="text" name="username" class="form-control form-control-sm" required>
            </div>

            <div class="mb-2 text-start">
                <label class="form-label mb-1">Password</label>
                <input type="password" name="password" class="form-control form-control-sm" required>
            </div>

            <div class="mb-3 text-start">
                <label class="form-label mb-1">Level Akses</label>
                <select name="level" class="form-select form-select-sm" required>
                    <option value="">-- Pilih Level --</option>
                    <option value="admin">Admin</option>
                    <option value="pengunjung">Pengunjung</option>
                </select>
            </div>

            <button type="submit" class="btn btn-login w-100 fw-semibold py-2">Sign In</button>
        </form>
    </div>
</div>

</body>
</html>

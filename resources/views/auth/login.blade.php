@extends('layouts.app')

@section('title', 'Login - Mega Karya Bersama')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height:80vh">
    <div class="card shadow-lg border-0 p-4" style="width:100%; max-width:420px;">
        <h3 class="text-center fw-bold mb-2">Selamat Datang</h3>
        <p class="text-center text-muted mb-4">Silakan login untuk melanjutkan</p>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login.post') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-primary w-100">Login</button>
        </form>

        <p class="text-center mt-3 mb-0">
            Belum punya akun?
            <a href="{{ route('register') }}">Daftar</a>
        </p>
    </div>
</div>
@endsection

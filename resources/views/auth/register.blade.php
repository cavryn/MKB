@extends('layouts.app')

@section('title', 'Register - Mega Karya Bersama')

@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height:80vh">
    <div class="card shadow-lg border-0 p-4" style="width:100%; max-width:420px;">
        <h3 class="text-center fw-bold mb-2">Buat Akun</h3>
        <p class="text-center text-muted mb-4">Daftar untuk mulai bekerja sama</p>

        @if ($errors->any())
            <div class="alert alert-danger">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ route('register.post') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="form-label">No HP</label>
                <input type="text" name="phone" class="form-control" required>
            </div>


            <div class="mb-4">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <button class="btn btn-primary w-100">Register</button>
        </form>

        <p class="text-center mt-3 mb-0">
            Sudah punya akun?
            <a href="{{ route('login') }}">Login</a>
        </p>
    </div>
</div>
@endsection

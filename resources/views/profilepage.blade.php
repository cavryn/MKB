@extends('layouts.app')

@section('title', 'Profil Saya')

@section('content')
<div class="container py-5" style="max-width: 720px">
    <div class="card shadow-sm border-0">
        <div class="card-body p-4">

            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold mb-0">👤 Profil Akun</h4>

                {{-- ICON KERANJANG --}}
                <a href="{{ route('cart.index') }}" class="btn btn-outline-primary position-relative">
                    🛒
                    @if(Auth::user()->carts->count() > 0)
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ Auth::user()->carts->count() }}
                        </span>
                    @endif
                </a>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{ session('success') }}
                    <button class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Avatar --}}
                <div class="text-center mb-4">
                    @if(Auth::user()->avatar)
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}"
                             class="rounded-circle mb-2"
                             width="110" height="110"
                             style="object-fit:cover">
                    @else
                        <div class="avatar-circle mx-auto mb-2" style="width:110px;height:110px;font-size:36px">
                            {{ strtoupper(substr(Auth::user()->name,0,1)) }}
                        </div>
                    @endif

                    <input type="file" name="avatar" class="form-control form-control-sm mt-2">
                    <small class="text-muted">JPG / PNG (Max 2MB)</small>
                </div>

                {{-- Nama --}}
                <div class="mb-3">
                    <label class="form-label">Nama Lengkap</label>
                    <input type="text" name="name"
                           class="form-control"
                           value="{{ old('name', Auth::user()->name) }}" required>
                </div>

                {{-- Email --}}
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email"
                           class="form-control"
                           value="{{ old('email', Auth::user()->email) }}" required>
                </div>

                {{-- No HP --}}
                <div class="mb-3">
                    <label class="form-label">No. HP</label>
                    <input type="text" name="phone"
                           class="form-control"
                           value="{{ old('phone', Auth::user()->phone) }}">
                </div>

                {{-- Role --}}
                <div class="mb-4">
                    <label class="form-label">Role</label>
                    <input type="text" class="form-control"
                           value="{{ Auth::user()->role }}"
                           disabled>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ Auth::user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}"
                       class="btn btn-outline-secondary">
                        ← Kembali
                    </a>

                    <button class="btn btn-primary">
                        💾 Simpan Perubahan
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

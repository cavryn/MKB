@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container py-5">

    <h2 class="fw-bold mb-4">👋 Selamat Datang, Admin {{ auth()->user()->name }}</h2>

    <div class="row g-4 mb-5">

        {{-- Card Produk --}}
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="fw-bold">📦 Total Produk</h5>
                </div>
            </div>
        </div>

        {{-- Card User --}}
        <div class="col-md-6">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h5 class="fw-bold">👥 Total Pengguna</h5>
                </div>
            </div>
        </div>

    </div>

    <div class="d-flex gap-3">
        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">
            Kelola Produk
        </a>

        <a href="{{ route('home') }}" class="btn btn-outline-secondary">
            Kembali ke Website
        </a>
    </div>

</div>
@endsection

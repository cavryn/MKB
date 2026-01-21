@extends('layouts.app')

@section('title', 'KalsiRata')

@section('content')
<div class="container py-5">

    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button class="btn-close" data-bs-dismiss="alert"></button>
    </div>
    @endif

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="{{ asset('assets/img/produk/fiber2.jpg') }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-primary">KalsiRata</h2>
            <p class="text-muted">
                Papan fiber semen ekonomis untuk aplikasi plafon interior.
            </p>

            <ul class="text-muted small">
                <li>Permukaan halus</li>
                <li>Ringan dan kuat</li>
                <li>Cocok untuk plafon</li>
            </ul>

            <a href="/papan-fiber-semen" class="btn btn-primary mt-3">
                ← Kembali ke Produk
            </a>
        </div>
    </div>

    @include('partials.spec-table', ['product' => 'KalsiRata'])

</div>
@endsection

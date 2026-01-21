@extends('layouts.app')

@section('title', 'KalsiClad')

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
            <img src="{{ asset('assets/img/produk/fiber4.jpg') }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-primary">KalsiClad</h2>
            <p class="text-muted">
                Material penutup dinding luar (fasad) bangunan.
            </p>

            <ul class="text-muted small">
                <li>Tahan cuaca</li>
                <li>Tampilan modern</li>
                <li>Eksterior bangunan</li>
            </ul>

            <a href="/papan-fiber-semen" class="btn btn-primary mt-3">
                ← Kembali ke Produk
            </a>
        </div>
    </div>

    @include('partials.spec-table', ['product' => 'KalsiClad'])

</div>
@endsection

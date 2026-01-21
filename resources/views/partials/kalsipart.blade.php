@extends('layouts.app')

@section('title', 'KalsiPart')

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
            <img src="{{ asset('assets/img/produk/fiber3.jpg') }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-primary">KalsiPart</h2>
            <p class="text-muted">
                Papan fiber semen untuk partisi dan dinding interior.
            </p>

            <ul class="text-muted small">
                <li>Kuat dan stabil</li>
                <li>Peredam suara</li>
                <li>Mudah dipasang</li>
            </ul>

            <a href="/papan-fiber-semen" class="btn btn-primary mt-3">
                ← Kembali ke Produk
            </a>
        </div>
    </div>

    @include('partials.spec-table', ['product' => 'KalsiPart'])

</div>
@endsection

@extends('layouts.app')

@section('title', 'KalsiGroove')

@section('content')
<div class="container py-5">

    @include('partials.cart-alert')

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="{{ asset('assets/img/produk/fiber6.jpg') }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-primary">KalsiGroove</h2>
            <p class="text-muted">
                Papan dekoratif beralur V untuk interior dengan desain modern dan elegan.
            </p>

            <ul class="text-muted small">
                <li>Desain alur V dekoratif</li>
                <li>Untuk aplikasi interior</li>
                <li>Tahan lama dan kuat</li>
                <li>Mudah dicat dan finishing</li>
                <li>Anti rayap</li>
            </ul>

            <a href="/papan-fiber-semen" class="btn btn-primary mt-3">← Kembali</a>
        </div>
    </div>

    @include('partials.spec-table', ['product' => 'KalsiGroove'])
</div>
@endsection
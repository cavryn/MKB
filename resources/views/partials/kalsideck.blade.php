@extends('layouts.app')

@section('title', 'KalsiDeck')

@section('content')
<div class="container py-5">

    @include('partials.cart-alert')

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="{{ asset('assets/img/produk/fiber7.jpg') }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-primary">KalsiDeck</h2>
            <p class="text-muted">
                Papan pengganti kayu untuk dek lantai outdoor dengan ketahanan superior.
            </p>

            <ul class="text-muted small">
                <li>Untuk lantai dek outdoor</li>
                <li>Tahan air dan cuaca</li>
                <li>Anti slip surface</li>
                <li>Tidak mudah lapuk</li>
                <li>Alternatif kayu ramah lingkungan</li>
            </ul>

            <a href="/papan-fiber-semen" class="btn btn-primary mt-3">← Kembali</a>
        </div>
    </div>

    @include('partials.spec-table', ['product' => 'KalsiDeck'])
</div>
@endsection
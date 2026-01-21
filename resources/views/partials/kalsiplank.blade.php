@extends('layouts.app')

@section('title', 'KalsiPlank')

@section('content')
<div class="container py-5">

    @include('partials.cart-alert')

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="{{ asset('assets/img/produk/fiber5.jpg') }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-primary">KalsiPlank</h2>
            <p class="text-muted">
                Pengganti kayu untuk dinding dekoratif.
            </p>

            <ul class="text-muted small">
                <li>Tampilan kayu</li>
                <li>Tahan rayap</li>
                <li>Interior & eksterior</li>
            </ul>

            <a href="/papan-fiber-semen" class="btn btn-primary mt-3">← Kembali</a>
        </div>
    </div>

    @include('partials.spec-table', ['product' => 'KalsiPlank'])
</div>
@endsection

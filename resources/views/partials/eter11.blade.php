@extends('layouts.app')

@section('title', 'Eter 11')

@section('content')
<div class="container py-5">

    @include('partials.cart-alert')

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="{{ asset('assets/img/produk/atap2.jpg') }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-primary">Eter 11</h2>
            <p class="text-muted">
                Atap gelombang kecil dengan 11 gelombang, ideal untuk berbagai kebutuhan atap.
            </p>

            <ul class="text-muted small">
                <li>11 gelombang kecil</li>
                <li>Ketebalan 3,5 mm</li>
                <li>Bahan fiber semen</li>
                <li>Ringan dan mudah dipasang</li>
                <li>Tahan lama</li>
            </ul>

            <a href="/atap-gelombang" class="btn btn-primary mt-3">← Kembali</a>
        </div>
    </div>

    @include('partials.spec-table', ['product' => 'Eter 11'])
</div>
@endsection
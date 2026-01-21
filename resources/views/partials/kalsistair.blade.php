@extends('layouts.app')

@section('title', 'KalsiStair')

@section('content')
<div class="container py-5">

    @include('partials.cart-alert')

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="{{ asset('assets/img/produk/fiber8.jpg') }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-primary">KalsiStair</h2>
            <p class="text-muted">
                Papan fiber semen khusus untuk anak tangga dengan permukaan anti slip.
            </p>

            <ul class="text-muted small">
                <li>Dirancang khusus untuk tangga</li>
                <li>Permukaan anti slip</li>
                <li>Kuat menahan beban</li>
                <li>Tahan lama</li>
                <li>Mudah dipasang</li>
            </ul>

            <a href="/papan-fiber-semen" class="btn btn-primary mt-3">← Kembali</a>
        </div>
    </div>

    @include('partials.spec-table', ['product' => 'KalsiStair'])
</div>
@endsection
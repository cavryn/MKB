@extends('layouts.app')

@section('title', 'Eter 6')

@section('content')
<div class="container py-5">

    @include('partials.cart-alert')

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="{{ asset('assets/img/produk/atap1.jpg') }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-primary">Eter 6</h2>
            <p class="text-muted">
                Atap gelombang besar dengan 6 gelombang dari bahan fiber semen berkualitas tinggi.
            </p>

            <ul class="text-muted small">
                <li>6 gelombang besar</li>
                <li>Ketebalan 5 mm dan 6 mm</li>
                <li>Bahan fiber semen</li>
                <li>Tahan cuaca ekstrem</li>
                <li>Anti rayap dan jamur</li>
            </ul>

            <a href="/atap-gelombang" class="btn btn-primary mt-3">← Kembali</a>
        </div>
    </div>

    @include('partials.spec-table', ['product' => 'Eter 6'])
</div>
@endsection
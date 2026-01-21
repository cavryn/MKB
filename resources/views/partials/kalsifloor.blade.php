@extends('layouts.app')

@section('title', 'KalsiFloor')

@section('content')
<div class="container py-5">

    @include('partials.cart-alert')

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="{{ asset('assets/img/produk/fiber9.jpg') }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-primary">KalsiFloor</h2>
            <p class="text-muted">
                Papan lantai fiber semen ketebalan 20mm untuk aplikasi lantai indoor dan outdoor.
            </p>

            <ul class="text-muted small">
                <li>Ketebalan 20mm extra strong</li>
                <li>Indoor & outdoor flooring</li>
                <li>Tahan beban berat</li>
                <li>Anti rayap dan jamur</li>
                <li>Cocok untuk area komersial</li>
            </ul>

            <a href="/papan-fiber-semen" class="btn btn-primary mt-3">← Kembali</a>
        </div>
    </div>

    @include('partials.spec-table', ['product' => 'KalsiFloor'])
</div>
@endsection
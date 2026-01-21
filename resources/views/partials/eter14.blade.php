@extends('layouts.app')

@section('title', 'Eter 14')

@section('content')
<div class="container py-5">

    @include('partials.cart-alert')

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="{{ asset('assets/img/produk/atap3.jpg') }}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-primary">Eter 14</h2>
            <p class="text-muted">
                Atap gelombang kecil dengan 14 gelombang, terbuat dari fiber cement tanpa asbes.
            </p>

            <ul class="text-muted small">
                <li>14 gelombang kecil</li>
                <li>Ketebalan 4 mm</li>
                <li>Fiber cement tanpa asbes</li>
                <li>Ramah lingkungan</li>
                <li>Kuat dan tahan lama</li>
            </ul>

            <a href="/atap-gelombang" class="btn btn-primary mt-3">← Kembali</a>
        </div>
    </div>

    @include('partials.spec-table', ['product' => 'Eter 14'])
</div>
@endsection
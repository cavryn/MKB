@extends('layouts.app')

@section('title', 'KalsiBoard Premium')

@section('content')
<div class="container py-5">

<div class="row align-items-center mb-5">
    <div class="col-md-6">
        <img src="{{ asset('assets/img/produk/fiber2.jpg') }}"
             class="img-fluid rounded shadow">
    </div>
    <div class="col-md-6">
        <h2 class="fw-bold text-primary">KalsiBoard Premium</h2>
        <p class="text-muted">
            Versi premium dengan kekuatan lebih tinggi untuk area
            dengan beban berat dan cuaca ekstrem.
        </p>
        <ul class="small text-muted">
            <li>Daya tahan tinggi</li>
            <li>Tahan panas & hujan</li>
            <li>Cocok fasad bangunan</li>
        </ul>
    </div>
</div>

@include('products.partials.table', ['product' => 'KalsiBoard Premium'])

</div>

@include('products.partials.cart-modal', ['product' => 'KalsiBoard Premium'])
@endsection

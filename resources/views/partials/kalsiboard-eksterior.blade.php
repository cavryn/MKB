@extends('layouts.app')

@section('title', 'KalsiBoard Eksterior')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/produk/kalsiboard-eksterior.jpg') }}" 
                     class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold text-primary">KalsiBoard Eksterior</h2>
                <p class="text-muted">
                    Solusi papan fiber semen untuk dinding luar bangunan.
                </p>

                <ul class="list-unstyled">
                    <li>✔ Tahan cuaca</li>
                    <li>✔ Anti rayap</li>
                    <li>✔ Kuat & stabil</li>
                </ul>

                <a href="{{ url('/hubungi-kami') }}" 
                   class="btn btn-primary rounded-pill px-4 mt-3">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@extends('layouts.app')

@section('title', 'KalsiBoard Gipsum')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/produk/kalsiboard-gipsum.jpg') }}" 
                     class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold text-primary">KalsiBoard Gipsum</h2>
                <p class="text-muted">
                    Papan gipsum berkualitas untuk plafon dan partisi interior.
                </p>

                <ul class="list-unstyled">
                    <li>✔ Permukaan halus</li>
                    <li>✔ Ringan</li>
                    <li>✔ Cocok interior</li>
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

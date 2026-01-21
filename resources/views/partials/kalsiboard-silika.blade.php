@extends('layouts.app')

@section('title', 'KalsiBoard Silika')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-md-6">
                <img src="{{ asset('assets/img/produk/kalsiboard-silika.jpg') }}" 
                     class="img-fluid rounded shadow">
            </div>
            <div class="col-md-6">
                <h2 class="fw-bold text-primary">KalsiBoard Silika</h2>
                <p class="text-muted">
                    Papan silika tahan panas dan api untuk aplikasi khusus.
                </p>

                <ul class="list-unstyled">
                    <li>✔ Tahan suhu tinggi</li>
                    <li>✔ Anti jamur</li>
                    <li>✔ Umur panjang</li>
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

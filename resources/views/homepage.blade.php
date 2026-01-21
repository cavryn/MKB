@extends('layouts.app')

@section('title', 'Beranda - Mega Karya Bersama')

@section('content')

{{-- 🔹 Hero Section dengan efek parallax --}}
<section class="wrapper image-wrapper bg-image bg-overlay text-white parallax-section"
         style="background-image: url('{{ asset('assets/img/photos/bg1.jpg') }}');">
  <div class="content">
      <div class="container">
          <h1 class="display-4 fw-bold mb-3">Selamat Datang di Mega Karya Bersama</h1>
          <p class="lead mb-4">
              Partner terpercaya dalam penyediaan material bangunan berkualitas tinggi.
          </p>

          {{-- CTA Dinamis --}}
          @auth
              <a href="{{ route('products') }}" class="btn btn-outline-light btn-lg">
                  Lihat Katalog
              </a>
          @else
              <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg">
                  Masuk untuk Melihat Produk
              </a>
          @endauth
      </div>
  </div>
</section>

{{-- 🔹 Sapaan User (Hanya Jika Login) --}}
@auth
<section class="container mt-5">
    <div class="alert alert-primary shadow-sm d-flex align-items-center justify-content-between">
        <div>
            <h5 class="mb-1 fw-bold">
                👋 Selamat datang kembali, {{ Auth::user()->name }}!
            </h5>
            <small>
                Senang melihat Anda kembali di Mega Karya Bersama.
            </small>
        </div>
        <a href="{{ route('products') }}" class="btn btn-outline-primary btn-sm">
            Lihat Produk
        </a>
    </div>
</section>
@endauth

{{-- 🔹 Section Mengapa Memilih Kami --}}
<section class="container text-center py-5">
  <h2 class="mb-4 fw-bold">Mengapa Memilih Kami?</h2>
  <div class="row g-4">
      <div class="col-md-4">
          <div class="card border-0 shadow-sm h-100">
              <div class="card-body">
                  <h5 class="card-title">🧱 Produk Berkualitas</h5>
                  <p class="card-text">
                      Setiap produk kami telah melewati uji kualitas ketat untuk memastikan keandalan terbaik.
                  </p>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card border-0 shadow-sm h-100">
              <div class="card-body">
                  <h5 class="card-title">🚚 Pengiriman Cepat</h5>
                  <p class="card-text">
                      Kami melayani pengiriman ke seluruh Indonesia dengan layanan ekspedisi terpercaya.
                  </p>
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card border-0 shadow-sm h-100">
              <div class="card-body">
                  <h5 class="card-title">🤝 Layanan Terbaik</h5>
                  <p class="card-text">
                      Kami selalu mengutamakan kepuasan pelanggan melalui komunikasi dan pelayanan cepat.
                  </p>
              </div>
          </div>
      </div>
  </div>
</section>

{{-- 🔹 Section Review Pelanggan --}}
<section class="bg-light py-5">
  <div class="container text-center">
      <h2 class="fw-bold mb-5">Apa Kata Pelanggan Kami?</h2>
      <div class="row justify-content-center g-4">

          <div class="col-md-4">
              <div class="card border-0 shadow-sm p-4 h-100">
                  <img src="{{ asset('assets/img/reviews/user1.jpg') }}" class="rounded-circle mx-auto mb-3" width="90" height="90">
                  <h5 class="fw-bold mb-1">Rizky Pratama</h5>
                  <small class="text-muted d-block mb-3">Kontraktor, Surabaya</small>
                  <div class="text-warning mb-3">★★★★★</div>
                  <p class="text-muted fst-italic">
                      “Pelayanan cepat dan produk asbesnya benar-benar berkualitas.”
                  </p>
              </div>
          </div>

          <div class="col-md-4">
              <div class="card border-0 shadow-sm p-4 h-100">
                  <img src="{{ asset('assets/img/reviews/user2.jpg') }}" class="rounded-circle mx-auto mb-3" width="90" height="90">
                  <h5 class="fw-bold mb-1">Siti Marlina</h5>
                  <small class="text-muted d-block mb-3">Pemilik Toko Bangunan, Bandung</small>
                  <div class="text-warning mb-3">★★★★★</div>
                  <p class="text-muted fst-italic">
                      “Tim Mega Karya Bersama sangat membantu dan ramah.”
                  </p>
              </div>
          </div>

          <div class="col-md-4">
              <div class="card border-0 shadow-sm p-4 h-100">
                  <img src="{{ asset('assets/img/reviews/user3.jpg') }}" class="rounded-circle mx-auto mb-3" width="90" height="90">
                  <h5 class="fw-bold mb-1">Andi Wijaya</h5>
                  <small class="text-muted d-block mb-3">Arsitek, Jakarta</small>
                  <div class="text-warning mb-3">★★★★☆</div>
                  <p class="text-muted fst-italic">
                      “Desain produk sesuai standar proyek saya.”
                  </p>
              </div>
          </div>

      </div>
  </div>
</section>

{{-- 🔹 Section CTA --}}
<section class="wrapper image-wrapper bg-image bg-overlay text-white parallax-section"
         style="background-image: url('{{ asset('assets/img/photos/bg1.jpg') }}');">
  <div class="content py-5">
      <div class="container">
          <h2 class="fw-bold mb-3">Siap Bekerja Sama dengan Kami?</h2>
          <p class="lead mb-4">
              Hubungi kami untuk informasi lebih lanjut mengenai produk dan layanan Mega Karya Bersama.
          </p>
          <a href="{{ route('about') }}" class="btn btn-outline-light btn-lg">
              Pelajari Lebih Lanjut
          </a>
      </div>
  </div>
</section>

@endsection

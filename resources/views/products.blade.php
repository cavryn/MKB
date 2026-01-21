@extends('layouts.app')

@section('title', 'Kategori Produk - Mega Karya Bersama')

@section('content')

<section class="wrapper image-wrapper bg-image bg-overlay text-white parallax-section"
         style="background-image: url('{{ asset('assets/img/photos/bg1.jpg') }}');">
  <div class="content text-center py-5">
      <div class="container">
          <h1 class="fw-bold mb-3">Kategori Produk</h1>
          <p class="lead mb-0">Pilih kategori untuk melihat produk kami.</p>
      </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
      <div class="row g-4">

          {{-- KATEGORI 1 --}}
          <div class="col-md-6 col-sm-12">
              <div class="card product-card">
                  <img class="category-img" src="{{ asset('assets/img/placeholder/category1.jpg') }}" alt="Papan Fiber Semen">

                  <div class="card-body">
                      <h5 class="fw-bold product-title">Papan Fiber Semen</h5>
                      <p class="text-muted small">
                          Material papan fiber yang kuat, ringan, dan tahan cuaca untuk kebutuhan konstruksi.
                      </p>
                      <a href="{{ route('produk.papan-fiber-semen') }}" class="product-link">Lihat Produk</a>
                  </div>
              </div>
          </div>

          {{-- KATEGORI 2 --}}
          <div class="col-md-6 col-sm-12">
              <div class="card product-card">
                  <div class="card-body">
                      <h5 class="fw-bold product-title">Atap Gelombang</h5>
                      <p class="text-muted small">
                          Atap gelombang kokoh dan tahan lama untuk berbagai jenis bangunan.
                      </p>
                      <a href="{{ route('produk.atap-gelombang') }}" class="product-link">Lihat Produk</a>
                  </div>

                  <img class="category-img" src="{{ asset('assets/img/placeholder/category2.jpg') }}" alt="Atap Gelombang">
              </div>
          </div>

      </div>
  </div>
</section>

@endsection

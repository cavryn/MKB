@extends('layouts.app')

@section('title', 'Tentang Kami - Mega Karya Bersama')

@section('content')

{{-- 🔹 Hero Section --}}
<section class="wrapper image-wrapper bg-image bg-overlay text-white parallax-section"
         style="background-image: url('{{ asset('assets/img/photos/bg1.jpg') }}');">
  <div class="content text-center py-5">
      <div class="container">
          <h1 class="display-5 fw-bold mb-3">Tentang Mega Karya Bersama</h1>
          <p class="lead mb-0">
              Membangun kepercayaan dan kualitas sejak awal berdiri.
          </p>
      </div>
  </div>
</section>

{{-- 🔹 Profil Perusahaan --}}
<section class="py-5">
  <div class="container">
      <div class="row align-items-center g-4">
          <div class="col-md-6">
              <img src="{{ asset('assets/img/photos/company.png') }}" class="img-fluid rounded-4 shadow" alt="Tentang Kami">
          </div>
          <div class="col-md-6">
              <h2 class="fw-bold mb-3">Siapa Kami?</h2>
              <p class="text-muted mb-3">
                  <strong>Mega Karya Bersama</strong> merupakan bagian dari <em>Mega Karya Group</em>, 
                  perusahaan yang bergerak di bidang perdagangan material bangunan. 
                  Kami berfokus pada penyediaan produk asbes, genteng, dan kebutuhan konstruksi lainnya 
                  untuk mendukung pembangunan di seluruh Indonesia.
              </p>
              <p class="text-muted">
                  Dengan pengalaman bertahun-tahun, kami terus berkomitmen menghadirkan 
                  produk berkualitas tinggi dan layanan terbaik demi kepuasan pelanggan.
              </p>
          </div>
      </div>
  </div>
</section>

{{-- 🔹 Visi & Misi --}}
<section class="bg-light py-5">
  <div class="container text-center">
      <h2 class="fw-bold mb-4">Visi & Misi Kami</h2>
      <div class="row g-4">
          <div class="col-md-6">
              <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                      <h5 class="fw-bold text-primary mb-3">🎯 Visi</h5>
                      <p class="text-muted">
                          Menjadi perusahaan penyedia material bangunan terpercaya yang 
                          memberikan solusi konstruksi terbaik bagi seluruh lapisan masyarakat.
                      </p>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="card border-0 shadow-sm h-100">
                  <div class="card-body">
                      <h5 class="fw-bold text-primary mb-3">🚀 Misi</h5>
                      <ul class="text-muted text-start mb-0">
                          <li>Menyediakan produk berkualitas tinggi dengan harga kompetitif.</li>
                          <li>Meningkatkan kepuasan pelanggan melalui layanan yang cepat dan profesional.</li>
                          <li>Berinovasi dalam sistem distribusi dan pelayanan.</li>
                          <li>Menjalin hubungan jangka panjang dengan mitra bisnis dan pelanggan.</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

{{-- 🔹 Tim Kami --}}
<section class="py-5">
  <div class="container text-center">
      <h2 class="fw-bold mb-5">Tim Kami</h2>
      <div class="row justify-content-center g-4">

          <div class="col-md-3 col-sm-6">
              <div class="card border-0 shadow-sm h-100 p-3">
                  <img src="{{ asset('assets/img/team/team1.jpg') }}" class="rounded-circle mx-auto mb-3" width="120" height="120" alt="CEO">
                  <h5 class="fw-bold mb-1">Eko Santoso</h5>
                  <small class="text-muted">CEO & Founder</small>
              </div>
          </div>

          <div class="col-md-3 col-sm-6">
              <div class="card border-0 shadow-sm h-100 p-3">
                  <img src="{{ asset('assets/img/team/team2.jpg') }}" class="rounded-circle mx-auto mb-3" width="120" height="120" alt="Manager">
                  <h5 class="fw-bold mb-1">Dian Pratiwi</h5>
                  <small class="text-muted">Marketing Manager</small>
              </div>
          </div>

          <div class="col-md-3 col-sm-6">
              <div class="card border-0 shadow-sm h-100 p-3">
                  <img src="{{ asset('assets/img/team/team3.jpg') }}" class="rounded-circle mx-auto mb-3" width="120" height="120" alt="Staff">
                  <h5 class="fw-bold mb-1">Rizky Adi</h5>
                  <small class="text-muted">Operational Staff</small>
              </div>
          </div>

      </div>
  </div>
</section>

{{-- 🔹 CTA Akhir --}}
<section class="wrapper image-wrapper bg-image bg-overlay text-white parallax-section"
         style="background-image: url('{{ asset('assets/img/photos/bg1.jpg') }}');">
  <div class="content text-center py-5">
      <div class="container">
          <h2 class="fw-bold mb-3">Ingin Mengenal Kami Lebih Dekat?</h2>
          <p class="lead mb-4">Hubungi kami untuk informasi lebih lanjut seputar Mega Karya Bersama.</p>
          <a href="{{ route('contact') }}" class="btn btn-outline-primary rounded-pill px-4 py-2 fw-semibold btn-fillup">
              Hubungi Kami
          </a>
      </div>
  </div>
</section>

@endsection

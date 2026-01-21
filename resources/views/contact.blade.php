@extends('layouts.app')

@section('title', 'Hubungi Kami - Mega Karya Bersama')

@section('content')
<section class="wrapper image-wrapper bg-image bg-overlay text-white parallax-section"
         style="background-image: url('{{ asset('assets/img/photos/bg1.jpg') }}');">
  <div class="content text-center py-5">
      <div class="container">
          <h1 class="fw-bold mb-3">Hubungi Kami</h1>
          <p class="lead mb-0">Kami siap membantu Anda untuk segala kebutuhan konstruksi.</p>
      </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
      <div class="row g-4">
          <div class="col-md-6">
              <h4 class="fw-bold mb-3">Alamat Kantor</h4>
              <p class="text-muted">
                  Jl. Raya Konstruksi No. 123, Bekasi, Jawa Barat<br>
                  Telp: (021) 888-999-000<br>
                  Email: info@megakaryabersama.co.id
              </p>
              <div class="mt-3">
<iframe
    src="https://www.google.com/maps?q=-7.4191,112.6731&hl=id&z=17&output=embed"
    width="100%"
    height="250"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
</iframe>

              </div>
          </div>
          <div class="col-md-6">
              <h4 class="fw-bold mb-3">Kirim Pesan</h4>
              <form>
                  <div class="mb-3">
                      <label class="form-label">Nama</label>
                      <input type="text" class="form-control" placeholder="Masukkan nama Anda">
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Email</label>
                      <input type="email" class="form-control" placeholder="Masukkan email Anda">
                  </div>
                  <div class="mb-3">
                      <label class="form-label">Pesan</label>
                      <textarea class="form-control" rows="4" placeholder="Tuliskan pesan Anda"></textarea>
                  </div>
                  <button type="submit" class="btn btn-outline-primary rounded-pill btn-fillup px-4 py-2 fw-semibold">
                      Kirim Pesan
                  </button>
              </form>
          </div>
      </div>
  </div>
</section>
@endsection

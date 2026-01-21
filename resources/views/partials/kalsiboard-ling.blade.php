@extends('layouts.app')

@section('title', 'KalsiBoard Ling')

@section('content')
<div class="container py-5">

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <img src="{{ asset('assets/img/produk/fiber1.jpg') }}" class="img-fluid rounded shadow" alt="KalsiBoard Ling">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-primary">KalsiBoard Ling</h2>
            <p class="text-muted">
                KALSIBoard Ling adalah papan fiber semen yang dirancang khusus untuk kebutuhan interior dan eksterior
                dengan ketahanan lembab yang lebih baik dibandingkan papan biasa.
            </p>

            <h5 class="fw-bold mt-4">Kelebihan Produk:</h5>
            <ul class="text-muted small">
                <li>Tahan lembab dan tidak mudah melengkung</li>
                <li>Bebas asbes dan aman untuk kesehatan</li>
                <li>Mudah dipasang dan diproses</li>
                <li>Sangat cocok untuk partisi dan pelapis dinding interior</li>
            </ul>

            <a href="/papan-fiber-semen" class="btn btn-primary mt-3">
                &#8592; Kembali ke Produk
            </a>
        </div>
    </div>

    <div class="mt-4">
    <h4 class="fw-bold text-primary">Spesifikasi Teknis</h4>

    <table class="table table-bordered mt-3 align-middle">
        <thead class="table-light">
            <tr>
                <th>Tebal (mm)</th>
                <th>Lebar (mm)</th>
                <th>Panjang (mm)</th>
                <th>Berat (kg)</th>
                <th>Ketersediaan</th>
                <th>Keranjang</th>
            </tr>
        </thead>
        <tbody>

            {{-- ROW TERSEDIA --}}
            <tr>
                <td>4</td>
                <td>1220</td>
                <td>2440</td>
                <td>16.40</td>
                <td class="text-success fw-bold">Tersedia</td>
                <td class="text-center">
                    @auth
                    <button class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#cartModal"
                        data-thickness="4"
                        data-width="1220"
                        data-length="2440"
                        title="Tambah ke Keranjang">
                        <i class="bi bi-cart-plus fs-5"></i>
                    </button>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                    @endauth
                </td>
            </tr>

            <tr>
                <td>4</td>
                <td>1200</td>
                <td>2440</td>
                <td>16.60</td>
                <td class="text-success fw-bold">Tersedia</td>
                <td class="text-center">
                    @auth
                    <button class="btn btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#cartModal"
                        data-thickness="4"
                        data-width="1200"
                        data-length="2440"
                        title="Tambah ke Keranjang">
                        <i class="bi bi-cart-plus fs-5"></i>
                    </button>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-sm btn-outline-secondary">Login</a>
                    @endauth
                </td>
            </tr>

            {{-- ROW TIDAK TERSEDIA --}}
            <tr>
                <td>3.5</td>
                <td>1200</td>
                <td>2400</td>
                <td>13.90</td>
                <td class="text-danger fw-bold">Tidak Tersedia</td>
                <td class="text-center text-muted">—</td>
            </tr>

            {{-- Tambahkan baris lain sesuai kebutuhan --}}
        </tbody>
    </table>
</div>

{{-- MODAL KERANJANG --}}
<div class="modal fade" id="cartModal" tabindex="-1">
    <div class="modal-dialog">
        <form method="POST" action="{{ route('cart.store') }}">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah ke Keranjang</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <input type="hidden" name="product_name" value="KalsiBoard Ling">
                    <input type="hidden" name="thickness" id="thickness">
                    <input type="hidden" name="width" id="width">
                    <input type="hidden" name="length" id="length">

                    <div class="mb-3">
                        <label class="form-label">Jumlah</label>
                        <input type="number" name="qty" class="form-control" min="1" value="1" required>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- SCRIPT --}}
<script>
document.getElementById('cartModal').addEventListener('show.bs.modal', function (event) {
    let btn = event.relatedTarget
    document.getElementById('thickness').value = btn.dataset.thickness
    document.getElementById('width').value = btn.dataset.width
    document.getElementById('length').value = btn.dataset.length
})
</script>

@endsection

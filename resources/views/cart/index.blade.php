@extends('layouts.app')

@section('title', 'Keranjang Saya')

@section('content')
<div class="container py-5" style="max-width: 900px">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold mb-0">🛒 Keranjang Saya</h3>
        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary btn-sm">
            ← Kembali
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @if(Auth::user()->carts->count() > 0)

        @php $total = 0; @endphp

        <div class="card shadow-sm border-0">
            <div class="card-body p-4">

                @foreach(Auth::user()->carts as $cart)
                    @php
                        $subtotal = $cart->qty * ($cart->price ?? 0);
                        $total += $subtotal;
                    @endphp

                    <div class="row align-items-center border-bottom py-3">
                        <div class="col-md-5">
                            <div class="fw-bold">{{ $cart->product_name }}</div>
                            <small class="text-muted">
                                Tebal {{ $cart->thickness }}mm •
                                {{ $cart->width }} x {{ $cart->length }}
                            </small>
                        </div>

                        <div class="col-md-4">
                            <form method="POST"
                                  action="{{ route('cart.update', $cart) }}"
                                  class="d-flex gap-2">
                                @csrf
                                @method('PUT')
                                <input type="number"
                                       name="qty"
                                       value="{{ $cart->qty }}"
                                       min="1"
                                       class="form-control form-control-sm"
                                       style="max-width: 80px">
                                <button class="btn btn-sm btn-outline-primary">
                                    Update
                                </button>
                            </form>
                        </div>

                        <div class="col-md-3 text-end">
                            <form method="POST" action="{{ route('cart.destroy', $cart) }}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger">
                                    🗑 Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach

                {{-- TOTAL --}}
                <div class="d-flex justify-content-between align-items-center mt-4">

                    {{-- CHECKOUT (WAJIB POST) --}}
<div class="text-end mt-4">
    <a href="{{ route('checkout') }}" class="btn btn-success btn-lg">
        📦 Checkout via WhatsApp
    </a>
</div>

                </div>

            </div>
        </div>

    @else
        <div class="text-center text-muted py-5">
            <div style="font-size: 48px">🛒</div>
            <p class="mt-3">Keranjang kamu masih kosong</p>
        </div>
    @endif

</div>
@endsection

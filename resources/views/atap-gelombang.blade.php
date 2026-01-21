@extends('layouts.app')

@section('title', 'Atap Gelombang')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4 text-primary">Atap Gelombang</h2>

    <div class="row g-4">
        @php
            $products = [
                [
                    'img' => 'atap1.jpg',
                    'slug' => 'eter-6',
                    'name' => 'Eter 6',
                    'desc' => 'jenis atap gelombang besar dengan 6 gelombang dari bahan fiber semen, yang tersedia dalam ketebalan 5 mm dan 6 mm.'
                ],
                [
                    'img' => 'atap2.jpg',
                    'slug' => 'eter-11',
                    'name' => 'Eter 11',
                    'desc' => 'Jenis atap gelombang kecil dari bahan fiber semen yang memiliki 11 gelombang dengan ketebalan 3,5 mm.'
                ],
                [
                    'img' => 'atap3.jpg',
                    'slug' => 'eter-14',
                    'name' => 'Eter 14',
                    'desc' => 'jenis atap gelombang kecil yang terbuat dari fiber cement tanpa asbes, memiliki ketebalan 4 mm, dan 14 gelombang..'
                ],
            ];
        @endphp

        @foreach ($products as $product)
        <div class="col-md-4">
            <a href="{{ url('/produk/' . $product['slug']) }}" class="text-decoration-none">
                <div class="card shadow-sm h-100 border-0 rounded-3">
                    <img src="{{ asset('assets/img/produk/' . $product['img']) }}"
                         class="card-img-top"
                         style="height:220px; object-fit:cover;" />

                    <div class="card-body">
                        <h5 class="fw-bold text-primary">{{ $product['name'] }}</h5>
                        <p class="text-muted small">{{ $product['desc'] }}</p>
                    </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>
</div>
@endsection

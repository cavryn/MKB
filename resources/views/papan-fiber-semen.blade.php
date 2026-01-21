@extends('layouts.app')

@section('title', 'Papan Fiber Semen')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4 text-primary">Papan Fiber Semen</h2>

    @php
        $products = [
            [
                'img' => 'fiber1.jpg',
                'slug' => 'kalsiboard-ling',
                'name' => 'KalsiBoard Ling',
                'desc' => 'Papan fiber semen untuk kebutuhan interior dan eksterior tahan lembab.'
            ],
            [
                'img' => 'fiber2.jpg',
                'slug' => 'kalsirata',
                'name' => 'KalsiRata',
                'desc' => 'Bahan bangunan ekonomis untuk plafon interior.'
            ],
            [
                'img' => 'fiber3.jpg',
                'slug' => 'kalsipart',
                'name' => 'KalsiPart',
                'desc' => 'Papan partisi dinding interior.'
            ],
            [
                'img' => 'fiber4.jpg',
                'slug' => 'kalsiclad',
                'name' => 'KalsiClad',
                'desc' => 'Material fasad untuk dinding luar bangunan.'
            ],
            [
                'img' => 'fiber5.jpg',
                'slug' => 'kalsiplank',
                'name' => 'KalsiPlank',
                'desc' => 'Pengganti kayu untuk dinding dekoratif.'
            ],
            [
                'img' => 'fiber6.jpg',
                'slug' => 'kalsigroove',
                'name' => 'KalsiGroove',
                'desc' => 'Papan dekoratif beralur V untuk interior.'
            ],
            [
                'img' => 'fiber7.jpg',
                'slug' => 'kalsideck',
                'name' => 'KalsiDeck',
                'desc' => 'Papan pengganti kayu untuk dek lantai.'
            ],
            [
                'img' => 'fiber8.jpg',
                'slug' => 'kalsistair',
                'name' => 'KalsiStair',
                'desc' => 'Papan fiber semen khusus anak tangga.'
            ],
            [
                'img' => 'fiber9.jpg',
                'slug' => 'kalsifloor',
                'name' => 'KalsiFloor',
                'desc' => 'Papan lantai fiber semen ketebalan 20mm.'
            ],
        ];
    @endphp

    <div class="row g-4">
        @foreach ($products as $product)
            <div class="col-md-4">
                <a href="{{ url('/produk/' . $product['slug']) }}" class="text-decoration-none text-dark">
                    <div class="card shadow-sm h-100 border-0 rounded-3">
                        <img src="{{ asset('assets/img/produk/' . $product['img']) }}"
                             class="card-img-top"
                             style="height:220px; object-fit:cover;">

                        <div class="card-body">
                            <h5 class="fw-bold text-primary">
                                {{ $product['name'] }}
                            </h5>
                            <p class="text-muted small">
                                {{ $product['desc'] }}
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
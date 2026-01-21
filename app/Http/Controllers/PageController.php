<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('homepage');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        // Data sementara (nanti diganti dari database)
        $products = [
            [
                'name' => 'Genteng Metal Premium',
                'category' => 'Material Bangunan',
                'price' => 'Rp 75.000 / m²',
                'description' => 'Genteng metal berkualitas tinggi dengan lapisan anti karat.',
                'image' => 'https://via.placeholder.com/400x250?text=Genteng+Metal',
            ],
            [
                'name' => 'Pipa PVC Super',
                'category' => 'Konstruksi',
                'price' => 'Rp 25.000 / meter',
                'description' => 'Pipa PVC dengan kekuatan tinggi dan daya tahan lama.',
                'image' => 'https://via.placeholder.com/400x250?text=Pipa+PVC',
            ],
            [
                'name' => 'Cat Tembok Eksterior',
                'category' => 'Finishing',
                'price' => 'Rp 120.000 / kaleng',
                'description' => 'Cat tahan cuaca, cocok untuk penggunaan luar ruangan.',
                'image' => 'https://via.placeholder.com/400x250?text=Cat+Eksterior',
            ],
        ];

        return view('products', compact('products'));
    }
}

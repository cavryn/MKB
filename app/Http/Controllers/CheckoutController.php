<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $carts = $user->carts;

        if ($carts->count() === 0) {
            return redirect()->route('cart.index')
                ->with('success', 'Keranjang masih kosong');
        }

        $message = "Halo Admin, saya ingin memesan:\n\n";

        foreach ($carts as $i => $cart) {
            $message .= ($i + 1) . ". {$cart->product_name}\n";
            $message .= "   Tebal: {$cart->thickness} mm\n";
            $message .= "   Ukuran: {$cart->width} x {$cart->length}\n";
            $message .= "   Jumlah: {$cart->qty}\n\n";
        }

        $message .= "Nama: {$user->name}\n";
        $message .= "Email: {$user->email}\n";
        $message .= "No HP: {$user->phone}\n";

        // NOMOR ADMIN (FORMAT INTERNASIONAL, TANPA +)
        $waNumber = "6285135839545";

        $waUrl = "https://wa.me/{$waNumber}?text=" . urlencode($message);

        return redirect()->away($waUrl);
    }
}

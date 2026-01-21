<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Tampilkan halaman keranjang
     */
    public function index()
    {
        return view('cart.index');
    }

    /**
     * Simpan item ke keranjang
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'thickness' => 'required',
            'width' => 'required',
            'length' => 'required',
            'qty' => 'required|integer|min:1'
        ]);

        Cart::create([
            'user_id' => Auth::id(),
            'product_name' => $request->product_name,
            'thickness' => $request->thickness,
            'width' => $request->width,
            'length' => $request->length,
            'qty' => $request->qty,
        ]);

        return back()->with('success', 'Produk berhasil dimasukkan ke keranjang');
    }

    /**
     * Update jumlah item
     */
    public function update(Request $request, Cart $cart)
    {
        // keamanan: pastikan milik user sendiri
        if ($cart->user_id !== Auth::id()) {
            abort(403);
        }

        $request->validate([
            'qty' => 'required|integer|min:1'
        ]);

        $cart->update([
            'qty' => $request->qty
        ]);

        return back()->with('success', 'Jumlah produk diperbarui');
    }

    /**
     * Hapus item dari keranjang
     */
    public function destroy(Cart $cart)
    {
        // keamanan: pastikan milik user sendiri
        if ($cart->user_id !== Auth::id()) {
            abort(403);
        }

        $cart->delete();

        return back()->with('success', 'Produk dihapus dari keranjang');
    }
}

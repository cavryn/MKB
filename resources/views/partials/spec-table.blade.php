<div class="mt-4">
    <h4 class="fw-bold text-primary">Spesifikasi Teknis</h4>

    <table class="table table-bordered mt-3 align-middle">
        <thead class="table-light">
            <tr>
                <th>Tebal</th>
                <th>Lebar (mm)</th>
                <th>Panjang (mm)</th>
                <th>Ketersediaan</th>
                <th>Keranjang</th>
            </tr>
        </thead>
        <tbody>
            @if($product === 'KalsiPlank')
                <tr>
                    <td>4 mm</td>
                    <td>1220</td>
                    <td>2440</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="4" data-width="1220" data-length="2440" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>

            @elseif($product === 'KalsiRata')
                <tr>
                    <td>4 mm</td>
                    <td>1200</td>
                    <td>2400</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="4" data-width="1200" data-length="2400" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>
                <tr>
                    <td>5 mm</td>
                    <td>1200</td>
                    <td>2400</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="5" data-width="1200" data-length="2400" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>

            @elseif($product === 'KalsiPart')
                <tr>
                    <td>6 mm</td>
                    <td>1220</td>
                    <td>2440</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="6" data-width="1220" data-length="2440" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>
                <tr>
                    <td>9 mm</td>
                    <td>1220</td>
                    <td>2440</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="9" data-width="1220" data-length="2440" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>

            @elseif($product === 'KalsiClad')
                <tr>
                    <td>6 mm</td>
                    <td>1220</td>
                    <td>2440</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="6" data-width="1220" data-length="2440" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>
                <tr>
                    <td>8 mm</td>
                    <td>1220</td>
                    <td>2440</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="8" data-width="1220" data-length="2440" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>

            @elseif($product === 'KalsiGroove')
                <tr>
                    <td>6 mm</td>
                    <td>1220</td>
                    <td>2440</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="6" data-width="1220" data-length="2440" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>
                <tr>
                    <td>8 mm</td>
                    <td>1220</td>
                    <td>2440</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="8" data-width="1220" data-length="2440" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>

            @elseif($product === 'KalsiDeck')
                <tr>
                    <td>8 mm</td>
                    <td>150</td>
                    <td>3000</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="8" data-width="150" data-length="3000" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>
                <tr>
                    <td>10 mm</td>
                    <td>150</td>
                    <td>3000</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="10" data-width="150" data-length="3000" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>

            @elseif($product === 'KalsiStair')
                <tr>
                    <td>8 mm</td>
                    <td>300</td>
                    <td>1200</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="8" data-width="300" data-length="1200" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>
                <tr>
                    <td>10 mm</td>
                    <td>300</td>
                    <td>1200</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="10" data-width="300" data-length="1200" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>

            @elseif($product === 'KalsiFloor')
                <tr>
                    <td>18 mm</td>
                    <td>600</td>
                    <td>1200</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="18" data-width="600" data-length="1200" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>
                <tr>
                    <td>20 mm</td>
                    <td>600</td>
                    <td>1200</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="20" data-width="600" data-length="1200" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>

            @elseif($product === 'Eter 6')
                <tr>
                    <td>5 mm</td>
                    <td>924</td>
                    <td>1800</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="5" data-width="924" data-length="1800" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>
                <tr>
                    <td>6 mm</td>
                    <td>924</td>
                    <td>2400</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="6" data-width="924" data-length="2400" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>

            @elseif($product === 'Eter 11')
                <tr>
                    <td>3.5 mm</td>
                    <td>660</td>
                    <td>1800</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="3.5" data-width="660" data-length="1800" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>
                <tr>
                    <td>3.5 mm</td>
                    <td>660</td>
                    <td>2100</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="3.5" data-width="660" data-length="2100" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>
                <tr>
                    <td>3.5 mm</td>
                    <td>660</td>
                    <td>2400</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="3.5" data-width="660" data-length="2400" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>

            @elseif($product === 'Eter 14')
                <tr>
                    <td>4 mm</td>
                    <td>660</td>
                    <td>1800</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="4" data-width="660" data-length="1800" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>
                <tr>
                    <td>4 mm</td>
                    <td>660</td>
                    <td>2100</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="4" data-width="660" data-length="2100" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>
                <tr>
                    <td>4 mm</td>
                    <td>660</td>
                    <td>2400</td>
                    <td class="text-success fw-bold">Tersedia</td>
                    <td class="text-center">
                        @auth
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cartModal"
                                data-thickness="4" data-width="660" data-length="2400" title="Tambah ke Keranjang">
                                <i class="bi bi-cart-plus fs-5"></i>
                            </button>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-outline-secondary">Login</a>
                        @endauth
                    </td>
                </tr>

            @endif
        </tbody>
    </table>
</div>

@include('partials.cart-modal', ['product' => $product])
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mega Karya Bersama')</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f9f9f9;
            color: #333;
            overflow-x: hidden;
        }

        /* Navbar */
        .navbar {
            background-color: #0d6efd;
            transition: all 0.3s ease;
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
            font-weight: 600;
        }

        .nav-link:hover {
            opacity: 0.85;
        }

        /* Logo */
        .navbar-brand img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 8px;
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover img {
            transform: scale(1.05);
        }

        /* Avatar user */
        .avatar {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #fff;
        }

        /* Footer */
        footer {
            background-color: #222;
            color: #fff;
            padding: 40px 0;
            text-align: center;
            margin-top: 80px;
        }

        /* Section Base */
        .wrapper {
            position: relative;
            width: 100%;
            overflow: hidden;
        }

        .bg-image {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .bg-overlay::before {
            content: "";
            position: absolute;
            inset: 0;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .wrapper .content {
            position: relative;
            z-index: 2;
            padding: 120px 0;
            text-align: center;
            color: white;
        }

        /* Parallax */
        .parallax-section {
            background-attachment: fixed;
            background-size: cover;
        }

        @media (max-width: 768px) {
            .parallax-section {
                background-attachment: scroll;
            }
        }

        main {
            margin-top: 70px;
        }
        /* Avatar inisial */
        .avatar-circle {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: linear-gradient(135deg, #0d6efd, #6610f2);
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-transform: uppercase;
            border: 2px solid #fff;
}

    </style>
</head>

<body>

    {{-- 🔹 NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center fw-bold" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/photos/logo.jpg') }}" alt="Logo">
                <span class="ms-2">Mega Karya Bersama</span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center gap-1">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/products') }}">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Kontak</a>
                    </li>


                    {{-- 🔐 AUTH AREA --}}
                    @guest
                        <li class="nav-item ms-3">
                            <a href="{{ route('login') }}" class="btn btn-light btn-sm fw-semibold">
                                Login
                            </a>
                        </li>
                    @endguest

                    @auth
                    <li class="nav-item dropdown ms-3">
                        <a class="nav-link dropdown-toggle d-flex align-items-center gap-2"
                        href="{{ route('profile') }}"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">

                            {{-- Avatar --}}
                            @if(Auth::user()->avatar ?? false)
                                <img src="{{ asset('storage/' . Auth::user()->avatar) }}"
                                    class="avatar"
                                    alt="Avatar">
                            @else
                                <div class="avatar-circle">
                                    {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                                </div>
                            @endif

                            <span>{{ Auth::user()->name }}</span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end shadow">
                            <li>
                                <a class="dropdown-item" href="{{ route('profile') }}">
                                    👤 Profil Saya
                                </a>
                            </li>

                            @if(Auth::user()->role === 'admin')
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                        🛠 Dashboard Admin
                                    </a>
                                </li>
                            @endif

                            <li><hr class="dropdown-divider"></li>

                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button class="dropdown-item text-danger">
                                        🚪 Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    {{-- 🔹 CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- 🔹 FOOTER --}}
    <footer>
        <div class="container">
            <p class="mb-1">&copy; {{ date('Y') }} Mega Karya Bersama. Semua hak cipta dilindungi.</p>
        </div>
    </footer>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

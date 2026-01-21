<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| PUBLIC PAGES
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products');

Route::view('/produk/papan-fiber-semen', 'papan-fiber-semen')
    ->name('produk.papan-fiber-semen');

Route::get('/produk/kalsiboard-ling', function () {
    return view('partials.kalsiboard-ling');
});

Route::get('/produk/kalsirata', function () {
    return view('partials.kalsirata');
});

Route::get('/produk/kalsipart', function () {
    return view('partials.kalsipart');
});

Route::get('/produk/kalsiclad', function () {
    return view('partials.kalsiclad');
});

Route::get('/produk/kalsiplank', function () {
    return view('partials.kalsiplank');
});

Route::get('/produk/kalsigroove', function () {
    return view('partials.kalsigroove');
});

Route::get('/produk/kalsideck', function () {
    return view('partials.kalsideck');
});

Route::get('/produk/kalsistair', function () {
    return view('partials.kalsistair');
});

Route::get('/produk/kalsifloor', function () {
    return view('partials.kalsifloor');
});

Route::view('/atap-gelombang', 'atap-gelombang')->name('produk.atap-gelombang');


Route::view('/contact', 'contact')->name('contact');


/*
|--------------------------------------------------------------------------
| AUTHENTICATION
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store'])->name('register.post');


/*
|--------------------------------------------------------------------------
| USER AREA (LOGIN REQUIRED)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('homepage');
    })->name('dashboard');

    // Profile User
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
});


/*
|--------------------------------------------------------------------------
| ADMIN AREA
|--------------------------------------------------------------------------
*/
Route::middleware(['auth', 'admin'])
    ->prefix('admin')
    ->name('admin.')
    ->group(function () {

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // CRUD Produk
        Route::resource('products', ProductController::class);
    });



Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::put('/cart/{cart}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');
});

use App\Http\Controllers\CheckoutController;

Route::middleware('auth')->get('/checkout', [CheckoutController::class, 'index'])
    ->name('checkout');

Route::get('/produk/eter-6', function () {
    return view('partials.eter6');
});

Route::get('/produk/eter-11', function () {
    return view('partials.eter11');
});

Route::get('/produk/eter-14', function () {
    return view('partials.eter14');
});

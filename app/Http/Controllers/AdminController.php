<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalProducts = Product::count();
        $totalUsers = User::count();

        return view('admin.dashboard', compact('totalProducts', 'totalUsers'));
    }
}
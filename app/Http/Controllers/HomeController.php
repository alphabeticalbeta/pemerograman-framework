<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // <-- 1. WAJIB IMPORT MODEL

class HomeController extends Controller
{
    public function index()
    {
        // 2. Ambil semua data dari tabel products
        $products = Product::all();

        // 3. Kirim ke view (sama seperti sebelumnya)
        return view('index', ['products' => $products]);
    }
}

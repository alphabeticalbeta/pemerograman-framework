<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Menampilkan halaman beranda.
     */
    public function index()
    {
        // 1. KITA BUAT DATA PALSU (ARRAY)
        $products = [
            [
                'id' => 1,
                'title' => 'Produk A (Dinamis)',
                'description' => 'Deskripsi produk pertama dari controller.',
                'image' => 'https://cdn.setirkanan.co.id/images/2023/10/26/08fb5a87aaf4c1c546a5a6af3bf075580e058fc0/banner-SK-(1).jpg',
                'button_class' => 'btn-primary'
            ],
            [
                'id' => 2,
                'title' => 'Produk B (Dinamis)',
                'description' => 'Deskripsi produk kedua dari controller.',
                'image' => 'https://files.belanjamobil.co.id/media/items/None/20250329205944list_mobil_daihatsu_bekas.webp',
                'button_class' => 'btn-success'
            ],
            [
                'id' => 3,
                'title' => 'Produk C (Dinamis)',
                'description' => 'Deskripsi produk ketiga dari controller.',
                'image' => 'https://cdn.setirkanan.co.id/images/2023/10/26/08fb5a87aaf4c1c546a5a6af3bf075580e058fc0/banner-SK-(1).jpg',
                'button_class' => 'btn-danger'
            ]
            // Kita bisa tambahkan data sebanyak yang kita mau di sini
        ];

        // 2. KITA KIRIM DATA KE VIEW
        return view('index', ['products' => $products]);
    }
}

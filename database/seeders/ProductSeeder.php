<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product; // 1. IMPORT MODEL INI

class ProductSeeder extends Seeder
{
    public function run()
    {
        // 2. Masukkan data produk
        $products = [
            [
                'title' => 'Produk A (Database)',
                'description' => 'Deskripsi produk pertama dari database MySQL.',
                'image' => 'https://cdn.setirkanan.co.id/images/2023/10/26/08fb5a87aaf4c1c546a5a6af3bf075580e058fc0/banner-SK-(1).jpg',
                'button_class' => 'btn-primary'
            ],
            [
                'title' => 'Produk B (Database)',
                'description' => 'Deskripsi produk kedua dari database MySQL.',
                'image' => 'https://files.belanjamobil.co.id/media/items/None/20250329205944list_mobil_daihatsu_bekas.webp',
                'button_class' => 'btn-success'
            ],
            [
                'title' => 'Produk C (Database)',
                'description' => 'Deskripsi produk ketiga dari database MySQL.',
                'image' => 'https://cdn.setirkanan.co.id/images/2023/10/26/08fb5a87aaf4c1c546a5a6af3bf075580e058fc0/banner-SK-(1).jpg',
                'button_class' => 'btn-danger'
            ]
        ];

        // 3. Looping untuk menyimpan ke database
        foreach ($products as $product) {
            Product::create($product);
        }
    }
}

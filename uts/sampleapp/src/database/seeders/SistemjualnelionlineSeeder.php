<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop Gaming',
                'category' => 'Elektronik',
                'price' => 15000000,
                'stock' => 10,
                'description' => 'Laptop gaming dengan spesifikasi tinggi, cocok untuk gaming dan editing.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sepatu Lari',
                'category' => 'Olahraga',
                'price' => 800000,
                'stock' => 25,
                'description' => 'Sepatu lari nyaman dan ringan, cocok untuk olahraga sehari-hari.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kursi Kantor Ergonomis',
                'category' => 'Furniture',
                'price' => 1200000,
                'stock' => 15,
                'description' => 'Kursi kantor ergonomis yang nyaman dan mendukung postur tubuh.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

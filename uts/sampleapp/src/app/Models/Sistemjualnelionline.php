<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistemjualnelionline extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang terkait dengan model
    protected $table = 'products';

    // Menentukan kolom mana yang bisa diisi secara massal (mass assignable)
    protected $fillable = [
        'name',        // Nama produk
        'category',    // Kategori produk (misalnya, elektronik, pakaian, dll.)
        'price',       // Harga produk
        'stock',       // Stok produk
        'description', // Deskripsi produk
    ];

    // Menentukan kolom yang harus diperlakukan sebagai tanggal otomatis
    protected $dates = ['created_at', 'updated_at'];

    // Jika Anda ingin menambahkan relasi dengan model lain, misalnya untuk relasi dengan model 'Order'
    // public function orders()
    // {
    //     return $this->hasMany(Order::class);
    // }
}

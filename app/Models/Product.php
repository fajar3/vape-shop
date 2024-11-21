<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Tentukan nama tabel, jika berbeda dari default (plural bentuk jamak)
    protected $table = 'products';

    // Tentukan kolom yang boleh diisi (Mass Assignment)
    protected $fillable = [
        'name',         // Ganti 'merek' dengan 'name'
        'category',     // Ganti 'kategori' dengan 'category'
        'price',
        'condition',
        'area',
        'foto',
        'description',  // Keterangan produk
    ];

    // Tentukan kolom yang harus dikecualikan dari mass assignment (jika ada)
    // protected $guarded = ['id'];

    // Atur tipe data kolom
    protected $casts = [
        'price' => 'integer',  // Mengonversi harga menjadi integer
    ];
}

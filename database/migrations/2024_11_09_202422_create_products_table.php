<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Jalankan migrasi.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // ID produk (auto-increment)
            $table->string('name'); // Kolom untuk nama produk
            $table->enum('kategori', ['liquid', 'device', 'component']); // Kolom kategori produk (diperbarui)
            $table->string('subkategori'); // Kolom subkategori produk yang terkait dengan kategori
            $table->decimal('harga', 15, 2); // Kolom harga dengan format angka desimal
            $table->enum('kondisi', ['baru', 'bekas']); // Kolom kondisi produk
            $table->string('area'); // Kolom untuk area (lokasi penjual)
            $table->text('foto'); // Kolom untuk foto produk (URL atau path)
            $table->text('keterangan')->nullable(); // Kolom keterangan produk (opsional)
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    /**
     * Balikkan migrasi.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

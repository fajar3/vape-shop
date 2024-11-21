<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products', [ProductController::class, 'store'])->name('products.store');
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');
// Rute untuk menampilkan produk berdasarkan subkategori
Route::get('/subkategori/{subkategori}', [ProductController::class, 'showBySubkategori'])->name('home.subkategori');

Route::get('/', [ProductController::class, 'welcome'])->name('home');  // Mengarah ke index() method di ProductController


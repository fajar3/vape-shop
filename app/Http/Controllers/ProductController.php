<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Method untuk menampilkan produk berdasarkan subkategori atau semua produk
    public function welcome($subkategori = null)
    {
        // Jika ada subkategori, tampilkan produk berdasarkan subkategori
        if ($subkategori) {
            $products = Product::where('subkategori', $subkategori)->latest()->get();
        } else {
            // Jika tidak ada subkategori, tampilkan semua produk terbaru
            $products = Product::latest()->get();
        }

        return view('welcome', compact('products'));
    }

    // Menampilkan halaman formulir untuk membuat produk
    public function create()
    {
        return view('products.create');
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        // Validasi input dari formulir
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'kategori' => 'required|string|in:liquid,device,component',
            'subkategori' => 'required|string',
            'harga' => 'required|numeric',
            'kondisi' => 'required|in:baru,bekas',
            'area' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif',
            'keterangan' => 'nullable|string',
        ]);
    
        // Menyimpan data produk
        $product = new Product();
        $product->name = $request->name;
        $product->kategori = $request->kategori;
        $product->subkategori = $request->subkategori;
        $product->harga = $request->harga;
        $product->kondisi = $request->kondisi;
        $product->area = $request->area;
        $product->keterangan = $request->keterangan;
    
        // Menangani foto produk (jika ada)
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('products'); // Menyimpan foto ke folder 'products' di storage
            $product->foto = $fotoPath;
        } else {
            $product->foto = null; // Jika tidak ada foto
        }
    
        $product->save();
    
        // Redirect setelah berhasil menyimpan produk
        return redirect()->route('home')->with('success', 'Produk berhasil ditambahkan!');
    }

    // Menampilkan daftar produk
    public function index(Request $request, $subkategori = null)
    {
        if ($subkategori) {
            $products = Product::where('subkategori', $subkategori)->latest()->get(); // Filter by subkategori
        } else {
            $products = Product::latest()->get(); // Get all products if no subkategori
        }

        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        // Mencari produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Menampilkan halaman detail produk
        return view('products.show', compact('product'));
    }
    public function showBySubkategori($subkategori)
{
    // Ambil produk berdasarkan subkategori
    $products = Product::where('subkategori', $subkategori)->get();

    return view('products/index', compact('products'));
}

}

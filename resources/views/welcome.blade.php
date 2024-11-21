<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CODan Vape</title>
    <!-- Bootstrap CSS (CDN) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-dark">
   @include('nav')

    <!-- Produk Terbaru -->
    <div class="container my-5">
        <div class="row g-4">
            <div class="col-12">
                <div class="">
                    <div class="card-body ">
                        <h2 class="h5 mb-4 text-white">Produk Terbaru</h2>
                        <div class="row row-cols-1 row-cols-md-3 g-4 ">
                            @foreach($products as $product)
                                <div class="col ">
                                    <div class="card bg-dark text-white pb-2 rounded-5" style="width: 350px; height: 450px; box-shadow: 0px 4px 15px rgb(0, 0, 0);">
                                        <!-- Foto produk -->
                                        <img src="{{ asset('storage/' . $product->foto) }}" alt="{{ $product->name }}" class="card-img-top rounded-5" style="width: 100%; height: 100%; object-fit: cover;">
                                        <div class="card-body">
                                            <!-- Nama produk -->
                                            <h5 class="card-title">{{ $product->kategori }} - {{ $product->subkategori }}</h5>
                                            <p class="card-text" style="margin-bottom: 0;">{{ ($product->name) }}</p>
                                            <p class="card-text mb-4" style="margin-top: 0;">Lokasi: {{ ($product->area) }}</p>
                                            <!-- Harga produk -->
                                        
                                            <!-- Link menuju detail produk -->
                                            <a href="{{ route('products.show', $product->id) }}" class="card-text bg-black rounded-4 p-3 text-center text-decoration-none" style="background-color: rgb(0, 0, 0); color: white; border-color:aliceblue">Harga: Rp {{ number_format($product->harga) }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

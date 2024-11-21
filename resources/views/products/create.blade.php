<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jual Produk - Vape Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light mx-3 align-content-center">
        <div class="container-fluid">
            <!-- Navbar content here -->
        </div>
    </nav>

    <div class="container py-5">
        <h1 class="text-center mb-4">Tambah Produk</h1>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nama Produk -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <!-- Kategori -->
            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select name="kategori" id="kategori" class="form-select" required>
                    <option value="">Pilih Kategori</option>
                    <option value="liquid">Liquid</option>
                    <option value="device">Device</option>
                    <option value="component">Component</option>
                </select>
            </div>
            
            <!-- Subkategori (Tersembunyi awalnya) -->
            <div class="mb-3" id="subkategori-container" style="display:none;">
                <label for="subkategori" class="form-label">Subkategori</label>
                <select name="subkategori" id="subkategori" class="form-select">
                    <!-- Subkategori akan dimasukkan di sini menggunakan JavaScript -->
                </select>
            </div>
            
            <!-- Harga -->
            <div class="mb-3">
                <label for="harga" class="form-label">Harga (Rp)</label>
                <input type="number" name="harga" id="harga" class="form-control" required>
            </div>

            <!-- Kondisi -->
            <div class="mb-3">
                <label for="kondisi" class="form-label">Kondisi</label>
                <select name="kondisi" id="kondisi" class="form-select" required>
                    <option value="baru">Baru</option>
                    <option value="bekas">Bekas</option>
                </select>
            </div>

            <!-- Area -->
            <div class="mb-3">
                <label for="area" class="form-label">Area</label>
                <input type="text" name="area" id="area" class="form-control" required>
            </div>

            <!-- Foto Produk -->
            <div class="mb-3">
                <label for="foto" class="form-label">Foto Produk</label>
                <input type="file" name="foto" id="foto" class="form-control" accept="image/*" required>
            </div>

            <!-- Keterangan -->
            <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan</label>
                <textarea name="keterangan" id="keterangan" class="form-control" rows="4"></textarea>
            </div>

            <button type="submit" class="btn btn-success">Posting</button>
        </form>
    </div>

    <!-- Link ke file JavaScript eksternal -->
    <script src="{{ asset('js/sub.js') }}"></script>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

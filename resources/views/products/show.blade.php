<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - Vape Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-dark mx-3 align-content-center">
    <div class="container-fluid">
        <!-- Left Side - CODan Vape Text -->
        <a class="navbar-brand text-white" href="#">CODan Vape</a>

        <!-- Toggler for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Center - Dropdown menus and other links on the right side -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownComponent" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-hdd-stack me-2"></i>Component
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownComponent">
                        <li><a class="dropdown-item" href="#">Kapas</a></li>
                        <li><a class="dropdown-item" href="#">Coil</a></li>
                        <li><a class="dropdown-item" href="#">RDA</a></li>
                        <li><a class="dropdown-item" href="#">RTA</a></li>
                        <li><a class="dropdown-item" href="#">Baterai</a></li>
                        <li><a class="dropdown-item" href="#">Toolkit</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownDevice" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-cpu-fill me-2"></i>Device
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownDevice">
                        <li><a class="dropdown-item" href="#">POD</a></li>
                        <li><a class="dropdown-item" href="#">MOD</a></li>
                        <li><a class="dropdown-item" href="#">AIO</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownLiquid" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-droplet-half me-2"></i>E-Liquid
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownLiquid">
                        <li><a class="dropdown-item" href="#">Saltnic</a></li>
                        <li><a class="dropdown-item" href="#">Free Base</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Right Side - Icons for marketplace and account -->
        <ul class="navbar-nav">
            <li class="nav-item me-1 align-content-center bg-black rounded-4 px-2">
                <a class="nav-link text-white" href="{{ route('products.index') }}">
                    <i class="bi bi-shop-window me-1"></i> <span>Marketplace</span> <!-- Marketplace Icon -->
                </a>
            </li>
            <li class="nav-item" style="font-size: 25px; ">
                <a class="nav-link text-white" href="#">
                    <i class="bi bi-person"></i> <!-- Account Icon -->
                </a>
            </li>
        </ul>
        </div>
    </div>
</nav>

    <div class="container py-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $product->foto) }}" alt="{{ $product->name }}" class="img-fluid">
            </div>
            <div class="col-md-6">
                <h1 class="text-primary">{{ $product->name }}</h1>
                <h3 class="text-primary">Rp {{ number_format($product->harga, 2) }}</h3>
                <p><strong>Kategori:</strong> {{ ucfirst($product->kategori) }}</p>
                <p><strong>Kondisi:</strong> {{ ucfirst($product->kondisi) }}</p>
                <p><strong>Area:</strong> {{ $product->area }}</p>
                <p><strong>Keterangan:</strong> {{ $product->keterangan ?? 'Tidak ada keterangan' }}</p>
            </div>
        </div>

        <a href="{{ route('products.index') }}" class="btn btn-secondary mt-4">Kembali ke Daftar Produk</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Vape Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-dark">
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
                        <li><a class="dropdown-item" href="{{ route('home.subkategori', ['subkategori' => 'kapas']) }}">Kapas</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.subkategori', ['subkategori' => 'coil']) }}">Coil</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.subkategori', ['subkategori' => 'rda']) }}">RDA</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.subkategori', ['subkategori' => 'rdta']) }}">RDTA</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.subkategori', ['subkategori' => 'mtl']) }}">MTL</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.subkategori', ['subkategori' => 'rta']) }}">RTA</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.subkategori', ['subkategori' => 'baterai']) }}">Baterai</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.subkategori', ['subkategori' => 'toolkit']) }}">Toolkit</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownDevice" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-cpu-fill me-2"></i>Device
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownDevice">
                        <li><a class="dropdown-item" href="{{ route('home.subkategori', ['subkategori' => 'pod']) }}">POD</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.subkategori', ['subkategori' => 'mod']) }}">MOD</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.subkategori', ['subkategori' => 'aio']) }}">AIO</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownLiquid" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-droplet-half me-2"></i>E-Liquid
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownLiquid">
                        <li><a class="dropdown-item" href="{{ route('home.subkategori', ['subkategori' => 'saltnic']) }}">Saltnic</a></li>
                        <li><a class="dropdown-item" href="{{ route('home.subkategori', ['subkategori' => 'freebase']) }}">Free Base</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Right Side - Icons for marketplace and account -->
            <ul class="navbar-nav">
                <li class="nav-item bg-black p-1 rounded-4 align-content-center me-2">
                    <a class="nav-link text-white" href="{{ route('products.create') }}">
                        <i class="bi bi-shop-window me-1"></i> <span>Posting</span> <!-- Account Icon -->
                    </a>
                </li>
                <li class="nav-item" style="font-size: 25px; ">
                    <a class="nav-link text-white" href="#">
                        <i class="bi bi-person"></i> <!-- Account Icon -->
                    </a>
                </li>
                
                <li class="nav-item" style="font-size: 25px;">
                    <a class="nav-link text-white" href="{{ route('home') }}">
                        <i class="bi bi-house"  ></i> <!-- Marketplace Icon -->
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <div class="container my-5">
        <div class="row g-4">
            <div class="col-12">
                <div class="">
                    <div class="card-body ">
                        <h2 class="h5 mb-4 text-white">Hasil Pencarian...</h2>
                        <div class="row row-cols-1 row-cols-md-3 g-4 ">
                            @foreach($products as $product)
                                <div class="col ">
                                    <div class="card bg-dark text-white pb-2 rounded-5" style="width: 400px; height: 500px; box-shadow: 0px 4px 15px rgb(0, 0, 0);">
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>

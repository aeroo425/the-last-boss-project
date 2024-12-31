<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i>ALTERKINDY FARM</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link active">Home</a></li>
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('employees.index') }}" class="nav-link">Employee List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i> My Profile</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h4><strong></strong></h4>
        <div class="card shadow-lg text-center mx-auto" style="border-radius: 15px;">
            <div class="card-body">
                <!-- Menambahkan gambar dengan pengaturan CSS untuk ukuran kecil dan tengah -->
                <img class="img-thumbnail" src="{{ Vite::asset('resources/images/farm.jpg') }}" alt="Farm Image" style="max-width: 50%; height: auto; display: block; margin: 0 auto;">

                <div class="bi-house-fill fs-1 text-primary mb-3"></div>
                <h1 class="card-title">WELCOME TO ALTERKINDY FARM</h1>
                <p class="card-text text-muted">Greetings from Alterkindy Farm! Your Partner in Livestock and Marketplace Solutions.</p>

                <!-- Menambahkan dua kotak pilihan di bawah tulisan -->
                <div class="row mt-4">
                    <div class="col-md-6" >
                        <div class="card shadow-sm" >
                            <div class="card-body">
                                <h5 class="card-title">MARKET PLACE</h5>
                                <p class="card-text">Anda bisa membeli produk yang kami tawarkan</p>
                                <a href="{{ route('market') }}" class="btn btn-primary">GO TO MARKET PLACE</a>


                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">KONSULTASI</h5>
                                <p class="card-text">Description for the second option.</p>
                                <a href="#" class="btn btn-primary">Go to Option 2</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @vite('resources/js/app.js')
</body>
</html>

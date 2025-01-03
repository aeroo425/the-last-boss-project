<!DOCTYPE html>
<html lang="en">
    <style>
        /* Memberikan warna hijau pastel untuk navbar */
        #custom-navbar {
            background-color: #8EB486; /* Warna hijau pastel */
        }

        /* Teks dan link di navbar */
        #custom-navbar .nav-link,
        #custom-navbar .navbar-brand {
            color: white; /* Teks berwarna putih */
        }

        /* Hover efek untuk link */
        #custom-navbar .nav-link:hover {
            color: #f8f9fa; /* Warna putih terang saat hover */
        }

        /* Tombol outline */
        #custom-navbar .btn-outline-light {
            border-color: white;
            color: white;
        }

        #custom-navbar .btn-outline-light:hover {
            background-color: white;
            color: #8EB486; /* Warna tombol saat hover */
        }
    </style>

<head>

    <body>
        <body>
            <nav id="custom-navbar" class="navbar navbar-expand-md navbar-dark">
                <div class="container">
                    <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i>ALTERKINDY FARM</a>

                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <hr class="d-lg-none text-white-50">


                        <div class="d-flex ms-md-auto">

                        <a href="{{ route('index') }}" class="btn btn-outline-light my-2 me-2 fw-bold"><i class="bi-person-circle me-1"></i>SELL</a>
                        <a href="{{ route('list.all') }}" class="btn btn-outline-light my-2 me-2 fw-bold"><i class="bi-person-circle me-1"></i>FORM</a>

                    </div>
                </div>
            </nav>

    </body>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        .kategori img {
            max-width: 80px;
            height: auto;
            border-radius: 10px;
            margin-bottom: 5px;
        }
        .recommendation-card {
            border: 1px solid #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .recommendation-card img {
            max-width: 100%;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .recommendation-card .card-body {
            text-align: center;
        }
        .highlight-section {
            background-color: #8EB486;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            align-items: center;
        }
        .highlight-section img {
            border-radius: 50%;
            max-width: 150px;
            height: auto;
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <!-- Highlight Section -->
        <div class="highlight-section mb-4">
            <div>
                <h2>MY FARM</h2>
                <p>adalah sebuah website inovatif yang dirancang khusus untuk mendukung keberlangsungan dan kemajuan peternakan dengan pendekatan modern, efisien, dan ramah lingkungan. Platform ini berfungsi sebagai jembatan penghubung antara peternak, konsumen, serta pelaku usaha lainnya dalam ekosistem peternakan, dengan tujuan menciptakan rantai pasok yang lebih terorganisir dan transparan.</p>
            </div>
            <img class="img-thumbnail" src="{{ Vite::asset('resources/images/farm.jpg') }}" alt="Farm Image" style="max-width: 20%; height: auto; display: block; margin: 0 auto;">

        </div>

        <!-- Kategori Populer -->
        <h4>Kategori Populer</h4>
        <div class="row kategori mb-4 text-center">
            <div class="col-3">
                <img class="img-thumbnail" src="{{ Vite::asset('resources\images\ayam cv.jpg') }}" alt="Farm Image" style="max-width: 70%; height: auto; display: block; margin: 0 auto;">
                <p>Ayam</p>
            </div>
            <div class="col-3">
                <img class="img-thumbnail" src="{{ Vite::asset('resources\images\telur cv.jpg') }}" alt="Farm Image" style="max-width: 70%; height: auto; display: block; margin: 0 auto;">
                <p>Telur</p>
            </div>
            <div class="col-3">
                <img class="img-thumbnail" src="{{ Vite::asset('resources\images\sapi cv.jpg') }}" alt="Farm Image" style="max-width: 70%; height: auto; display: block; margin: 0 auto;">
                <p>Sapi</p>
            </div>
            <div class="col-3">
                <img class="img-thumbnail" src="{{ Vite::asset('public\images\susu.jpg') }}" alt="Farm Image" style="max-width: 70%; height: auto; display: block; margin: 0 auto;">
                <p>Susu</p>
            </div>
        </div>

        <!-- Rekomendasi -->
        <h4>Rekomendasi</h4>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="recommendation-card">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources\images\broiler.jpg') }}" alt="Farm Image" style="max-width: 80%; height: auto; display: block; margin: 0 auto;">
                    <div class="card-body">
                        <h5>Ayam Broiler</h5>
                        <p>Quantity<br>Jemursari, Surabaya, Jawa Timur</p>
                        <a href="{{ route('output_buyer') }}" class="btn btn-outline-primary">
                            <i class="bi-telephone"></i> Contact
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="recommendation-card">
                    <img class="img-thumbnail" src="{{ Vite::asset('resources\images\telur cv.jpg') }}" alt="Farm Image" style="max-width: 80%; height: auto; display: block; margin: 0 auto;">
                    <div class="card-body">
                        <h5>Telur</h5>
                        <p>Quantity<br>Ketintang, Surabaya, jawa Timur</p>
                        <a href="#" class="btn btn-outline-primary"><i class="bi-telephone"></i> Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>
</html>

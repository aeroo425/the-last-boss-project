<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Farm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        .kategori img {
            max-width: 80px;
            height: auto;
            border-radius: 10px;
            margin-bottom: 5px;
        }
        .recommendation-card {
            border: 1px solid #e0e0e0;
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
            background-color: #ffeb3b;
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
                <img class="img-thumbnail" src="{{ Vite::asset('resources\images\ayam.jpg') }}" alt="Farm Image" style="max-width: 70%; height: auto; display: block; margin: 0 auto;">
                <p>Ayam</p>
            </div>
            <div class="col-3">
                <img src="path/to/eggs.jpg" alt="Telur">
                <p>Telur</p>
            </div>
            <div class="col-3">
                <img src="path/to/cow.jpg" alt="Sapi">
                <p>Sapi</p>
            </div>
            <div class="col-3">
                <img src="path/to/milk.jpg" alt="Susu">
                <p>Susu</p>
            </div>
        </div>

        <!-- Rekomendasi -->
        <h4>Rekomendasi</h4>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="recommendation-card">
                    <img src="path/to/chicken-recommendation.jpg" alt="Ayam Broiler">
                    <div class="card-body">
                        <h5>Ayam Broiler</h5>
                        <p>Quantity<br>Location</p>
                        <a href="#" class="btn btn-outline-primary"><i class="bi-telephone"></i> Contact</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="recommendation-card">
                    <img src="path/to/egg-recommendation.jpg" alt="Telur">
                    <div class="card-body">
                        <h5>Telur</h5>
                        <p>Quantity<br>Location</p>
                        <a href="#" class="btn btn-outline-primary"><i class="bi-telephone"></i> Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

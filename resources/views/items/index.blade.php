<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
    <!-- Tambahkan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            @foreach($items as $item)
                <div class="col-md-3 text-center mb-4">
                    <img src="{{ $item['image'] }}" class="img-fluid rounded" alt="{{ $item['title'] }}">
                    <h5 class="mt-2">{{ $item['title'] }}</h5>
                    <a href="{{ $item['route'] }}" class="btn btn-primary mt-2">jual {{ $item['title'] }}</a>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Tambahkan JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

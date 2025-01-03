<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 50px;
        }
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 150px;
            text-align: center;
            padding: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .card h3 {
            font-size: 16px;
            margin: 10px 0 0;   
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach ($products as $product)
            <div class="card">
                <img src="/images/{{ $product['image'] }}" alt="{{ $product['name'] }}">
                <h3>{{ $product['name'] }}</h3>
            </div>
        @endforeach
    </div>
</body>
</html>

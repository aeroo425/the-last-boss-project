<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Image and Link</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 text-center">
        <img class="img-thumbnail" src="{{ Vite::asset('resources\images\qr.jpg') }}" alt="Farm Image" style="max-width: 50%; height: auto; display: block; margin: 0 auto;">
        <h5><a href="wa.me.+6281529756290" class="text-decoration-none">Klik di sini untuk informasi lebih lanjut</a></h5>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

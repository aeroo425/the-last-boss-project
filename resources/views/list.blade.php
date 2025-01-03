<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white text-center">
                <h5>Data Unggahan</h5>
            </div>
            <div class="card-body">
                <div class="mb-3 text-center">
                    <img src="{{ asset('storage/' . $data['file']) }}" alt="Uploaded File" class="img-fluid rounded">
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><strong>Kategori:</strong> {{ $data['kategori'] }}</li>
                    <li class="list-group-item"><strong>Jumlah:</strong> {{ $data['jumlah'] }}</li>
                    <li class="list-group-item"><strong>Nomor Kontak:</strong> {{ $data['nomor_kontak'] }}</li>
                    <li class="list-group-item"><strong>State:</strong> {{ $data['state'] }}</li>
                    <li class="list-group-item"><strong>City:</strong> {{ $data['city'] }}</li>
                    <li class="list-group-item"><strong>Village:</strong> {{ $data['village'] }}</li>
                    <li class="list-group-item"><strong>Deskripsi:</strong> {{ $data['deskripsi'] }}</li>
                </ul>
                <div class="text-center mt-4">
                    <!-- Tombol Edit -->
                    <a href="{{ route('list.edit', $data['id']) }}" class="btn btn-warning mb-2">Edit</a>

                    <!-- Form Hapus -->
                    <form action="{{ route('list.delete', $data['id']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger mb-2" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                    </form>

                    <!-- Tombol Kembali -->
                    <a href="{{ route('list.all') }}" class="btn btn-primary mb-2">Kembali ke Semua Data</a>
                    <a href="{{ route('market') }}" class="btn btn-secondary">Kembali ke Market</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

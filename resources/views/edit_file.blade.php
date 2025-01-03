<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit File</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="text-center mb-0">Edit File</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('file.update', $file->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Kategori -->
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <input type="text" name="kategori" id="kategori" class="form-control" value="{{ old('kategori', $file->kategori) }}" required>
                    </div>

                    <!-- Jumlah -->
                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="form-control" value="{{ old('jumlah', $file->jumlah) }}" required>
                    </div>

                    <!-- Nomor Kontak -->
                    <div class="mb-3">
                        <label for="nomor_kontak" class="form-label">Nomor Kontak</label>
                        <input type="text" name="nomor_kontak" id="nomor_kontak" class="form-control" value="{{ old('nomor_kontak', $file->nomor_kontak) }}" required>
                    </div>

                    <!-- State -->
                    <div class="mb-3">
                        <label for="state" class="form-label">State</label>
                        <input type="text" name="state" id="state" class="form-control" value="{{ old('state', $file->state) }}" required>
                    </div>

                    <!-- City -->
                    <div class="mb-3">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" id="city" class="form-control" value="{{ old('city', $file->city) }}" required>
                    </div>

                    <!-- Village -->
                    <div class="mb-3">
                        <label for="village" class="form-label">Village</label>
                        <input type="text" name="village" id="village" class="form-control" value="{{ old('village', $file->village) }}" required>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" required>{{ old('deskripsi', $file->deskripsi) }}</textarea>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('file.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Upload File</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container mt-5">
            <h3>Form Upload</h3>
            <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- File Upload -->
                <div class="mb-3">
                    <label for="file" class="form-label">Pilih File</label>
                    <input type="file" name="file" id="file" class="form-control" required>
                </div>

                <!-- Kategori -->
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select class="form-select" name="kategori" id="kategori" required>
                        <option selected disabled>Pilih Kategori</option>
                        <option value="1">Kategori 1</option>
                        <option value="2">Kategori 2</option>
                    </select>
                </div>

                <!-- Jumlah -->
                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah</label>
                    <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Masukkan jumlah" required>
                </div>

                <!-- Nomor Kontak -->
                <div class="mb-3">
                    <label for="nomor_kontak" class="form-label">Nomor Kontak</label>
                    <input type="text" name="nomor_kontak" id="nomor_kontak" class="form-control" placeholder="Masukkan nomor kontak" required>
                </div>

                <!-- Lokasi -->
                <div class="mb-3">
                    <label for="state" class="form-label">State</label>
                    <input type="text" name="state" id="state" class="form-control" placeholder="Masukkan state" required>
                </div>
                <div class="row g-2">
                    <div class="col">
                        <label for="city" class="form-label">City</label>
                        <input type="text" name="city" id="city" class="form-control" placeholder="Masukkan city" required>
                    </div>
                    <div class="col">
                        <label for="village" class="form-label">Village</label>
                        <input type="text" name="village" id="village" class="form-control" placeholder="Masukkan village" required>
                    </div>
                </div>

                <!-- Deskripsi -->
                <div class="mb-3 mt-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" placeholder="Masukkan deskripsi" required></textarea>
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Unggah</button>
            </form>

            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success mt-3">{{ session('success') }}</div>
            @endif

            <!-- Error Messages -->
            @if($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </body>
    </html>

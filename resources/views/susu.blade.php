<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h5>Form Upload</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('file.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <!-- Upload Box -->
                    <div class="mb-3 text-center">
                        <div class="border rounded p-3" style="cursor: pointer;" onclick="document.getElementById('image').click()">
                            <input type="file" name="file" id="image" class="d-none" onchange="previewImage(event)">
                            <i class="bi bi-upload fs-3 text-primary"></i>
                            <p class="text-muted" id="upload-text">Click here to upload an image</p>
                            <img id="preview" src="#" class="img-fluid rounded d-none" alt="Uploaded Image">
                        </div>
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
                        <input type="number" name="jumlah" id="jumlah" class="form-control" placeholder="Jumlah" required>
                    </div>

                    <!-- Nomor Kontak -->
                    <div class="mb-3">
                        <label for="nomor_kontak" class="form-label">Nomor Kontak</label>
                        <input type="text" name="nomor_kontak" id="nomor_kontak" class="form-control" placeholder="Nomor Kontak" required>
                    </div>

                    <!-- State, City, Village -->
                    <div class="mb-3">
                        <label for="state" class="form-label">State</label>
                        <input type="text" name="state" id="state" class="form-control" placeholder="State" required>
                    </div>
                    <div class="row g-2">
                        <div class="col">
                            <label for="city" class="form-label">City</label>
                            <input type="text" name="city" id="city" class="form-control" placeholder="City" required>
                        </div>
                        <div class="col">
                            <label for="village" class="form-label">Village</label>
                            <input type="text" name="village" id="village" class="form-control" placeholder="Village" required>
                        </div>
                    </div>

                    <!-- Deskripsi -->
                    <div class="mb-3 mt-3">
                        <label for="deskripsi" class="form-label">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3" placeholder="Deskripsi" required></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Unggah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Preview Image Script -->
    <script>
        function previewImage(event) {
            const image = document.getElementById('preview');
            const uploadText = document.getElementById('upload-text');
            image.src = URL.createObjectURL(event.target.files[0]);
            image.classList.remove('d-none');
            uploadText.style.display = 'none';
        }
    </script>
</body>
</html>

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Upload Item</h1>
    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="file" class="form-label">Upload Image</label>
            <input type="file" name="file" id="file" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori</label>
            <select name="kategori" id="kategori" class="form-select" required>
                <option value="Broiler">Broiler</option>
                <option value="Daging">Daging</option>
                <option value="Telur">Telur</option>
                <option value="Susu">Susu</option>
                <option value="Anak Ayam">Anak Ayam</option>
                <option value="Sapi">Sapi</option>
                <option value="Vaksin">Vaksin</option>
                <option value="Obat">Obat</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="number" name="jumlah" class="form-control" placeholder="Jumlah" required>
        </div>
        <div class="mb-3">
            <input type="text" name="nomor_kontak" class="form-control" placeholder="Nomor Kontak" required>
        </div>
        <div class="mb-3">
            <input type="text" name="state" class="form-control" placeholder="State" required>
        </div>
        <div class="mb-3">
            <input type="text" name="city" class="form-control" placeholder="City" required>
        </div>
        <div class="mb-3">
            <input type="text" name="village" class="form-control" placeholder="Village" required>
        </div>
        <div class="mb-3">
            <textarea name="deskripsi" class="form-control" rows="3" placeholder="Deskripsi" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Unggah</button>
    </form>
</div>
@endsection

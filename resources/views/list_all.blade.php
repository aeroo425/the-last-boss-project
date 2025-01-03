<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uploaded Files</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="card-header bg-success text-white">
                <h5 class="text-center">Uploaded Files</h5>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>File</th>
                            <th>Kategori</th>
                            <th>Jumlah</th>
                            <th>Kontak</th>
                            <th>Lokasi</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th> <!-- Kolom untuk aksi Update dan Delete -->
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($files as $file)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $file->file_path) }}" alt="File" width="100">
                            </td>
                            <td>{{ $file->kategori }}</td>
                            <td>{{ $file->jumlah }}</td>
                            <td>{{ $file->nomor_kontak }}</td>
                            <td>{{ $file->state }}, {{ $file->city }}, {{ $file->village }}</td>
                            <td>{{ $file->deskripsi }}</td>
                            <td>
                                <!-- Tombol Update -->
                                <a href="{{ route('file.edit', $file->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                <!-- Tombol Delete -->
                                <form action="{{ route('file.destroy', $file->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this file?')">Delete</button>

                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex gap-2">
                    <a href="{{ route('items.index', ['file_id' => $file->id]) }}" class="btn btn-primary btn-sm">SELL</a>
                    <a href="{{ route('home', ['file_id' => $file->id]) }}" class="btn btn-primary btn-sm">HOME</a>
                </div>

            </div>


        </div>
    </div>
</body>
</html>

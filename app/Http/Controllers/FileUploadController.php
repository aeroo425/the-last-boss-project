<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpg,png,pdf|max:2048',
        ]);

        // Simpan file
        $filePath = $request->file('file')->store('uploads', 'public');

        // Simpan data ke database
        $fileUpload = new FileUpload();
        $fileUpload->file_path = $filePath;
        $fileUpload->kategori = $request->kategori;
        $fileUpload->jumlah = $request->jumlah;
        $fileUpload->nomor_kontak = $request->nomor_kontak;
        $fileUpload->state = $request->state;
        $fileUpload->city = $request->city;
        $fileUpload->village = $request->village;
        $fileUpload->deskripsi = $request->deskripsi;
        $fileUpload->save();

        return redirect()->route('list.all')->with('success', 'File berhasil diunggah!');
    }

    public function index()
    {
        $files = FileUpload::all(); // Ambil semua data dari database
    return view('list_all', compact('files')); // Ganti 'file.index' menjadi 'list_all'
    }

    public function update(Request $request, $id)
{
    // Validasi data input
    $request->validate([
        'kategori' => 'required',
        'jumlah' => 'required|numeric',
        'nomor_kontak' => 'required',
        'state' => 'required',
        'city' => 'required',
        'village' => 'required',
        'deskripsi' => 'required',
    ]);

    // Cari file berdasarkan ID
    $file = FileUpload::findOrFail($id);

    // Update data file
    $file->update([
        'kategori' => $request->kategori,
        'jumlah' => $request->jumlah,
        'nomor_kontak' => $request->nomor_kontak,
        'state' => $request->state,
        'city' => $request->city,
        'village' => $request->village,
        'deskripsi' => $request->deskripsi,
    ]);

    // Redirect ke halaman dengan pesan sukses
    return redirect()->route('file.index')->with('success', 'File berhasil diperbarui');
}

public function destroy($id)
{
    // Cari file berdasarkan ID
    $file = FileUpload::findOrFail($id);

    // Hapus file dari storage
    Storage::delete('public/' . $file->file_path);

    // Hapus record dari database
    $file->delete();

    // Redirect dengan pesan sukses
    return redirect()->route('file.index')->with('success', 'File berhasil dihapus');
}

public function edit($id)
{
    // Cari file berdasarkan ID
    $file = FileUpload::findOrFail($id);

    // Tampilkan halaman edit dengan data file
    return view('edit_file', compact('file'));
}

}

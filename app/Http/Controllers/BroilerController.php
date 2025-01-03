<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BroilerController extends Controller
{
    public function create()
    {
        return view('broiler_form');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048', // File harus berupa gambar
            'kategori' => 'required',
            'jumlah' => 'required|integer',
            'nomor_kontak' => 'required',
            'state' => 'required',
            'city' => 'required',
            'village' => 'required',
            'deskripsi' => 'required'
        ]);

        // Simpan file gambar
        $path = $request->file('image')->store('uploads', 'public');

        // Simpan data lainnya
        $data = $request->except('image');
        $data['image_path'] = $path;

        // Lakukan proses penyimpanan ke database jika diperlukan
        // Contoh: Broiler::create($data);

        return back()->with('success', 'Form berhasil dikirim dan gambar berhasil diunggah!');
    }
}

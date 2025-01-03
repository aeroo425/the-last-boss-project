<?php

namespace App\Http\Controllers;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = [
            ['title' => 'Broiler', 'image' => asset('images/broiler.jpg'), 'route' => route('broiler')],
            ['title' => 'Daging Ayam', 'image' => asset('images/daging.jpg'), 'route' => route('daging')],
            ['title' => 'Telur', 'image' => asset('images/telur cv.jpg'), 'route' => route('telur')],
            ['title' => 'Susu', 'image' => asset('images/susu.jpg'), 'route' => route('susu')],
            ['title' => 'Anak Ayam', 'image' => asset('images\anak ayam.jpg'), 'route' => route('anak')],
            ['title' => 'Sapi', 'image' => asset('images\sapi cv.jpg'), 'route' => route('sapi')],
            ['title' => 'Vaksin', 'image' => asset('images/vaksin.jpg'), 'route' => route('vaksin')],
            ['title' => 'Obat', 'image' => asset('images/obat.jpg'), 'route' => route('obat')],
        ];

        return view('items.index', compact('items'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kategori' => 'required|string',
            'jumlah' => 'required|integer',
            'nomor_kontak' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'village' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        // Upload file
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads', $fileName, 'public');

        // Simpan data ke database
        Item::create([
            'file_path' => '/storage/' . $filePath,
            'kategori' => $request->kategori,
            'jumlah' => $request->jumlah,
            'nomor_kontak' => $request->nomor_kontak,
            'state' => $request->state,
            'city' => $request->city,
            'village' => $request->village,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('items.index')->with('success', 'Item berhasil ditambahkan.');
    }


}

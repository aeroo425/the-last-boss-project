<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_path',
        'kategori',
        'jumlah',
        'nomor_kontak',
        'state',
        'city',
        'village',
        'deskripsi',
    ];
}

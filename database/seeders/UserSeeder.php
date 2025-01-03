<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Tambahkan ini
use Illuminate\Support\Facades\Hash; // Tambahkan ini jika menggunakan Hash::make untuk password

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data pengguna secara otomatis
        DB::table('users')->insert([
            'name' => 'Administrator',
            'email' => 'admin@admin',
            'password' => Hash::make('adminadmin'), // Gunakan Hash::make sebagai best practice
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uploads', function (Blueprint $table) {
            $table->id();
            $table->string('file_path');       // Untuk menyimpan path file
            $table->string('kategori');       // Untuk kategori
            $table->integer('jumlah');        // Untuk jumlah
            $table->string('nomor_kontak');   // Untuk nomor kontak
            $table->string('state');          // Untuk state
            $table->string('city');           // Untuk city
            $table->string('village');        // Untuk village
            $table->text('deskripsi');        // Untuk deskripsi
            $table->timestamps();             // Untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uploads');
    }
};

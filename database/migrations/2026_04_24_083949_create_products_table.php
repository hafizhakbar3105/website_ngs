<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('brand');       // Untuk "CHCNAV GNSS"
        $table->string('badge')->nullable(); // Untuk "Premium Tech" (Bisa kosong)
        $table->string('name');        // Untuk "i93 Visual IMU RTK"
        $table->text('description');   // Deskripsi alat
        $table->string('image');       // Path gambar
        $table->boolean('is_featured')->default(true); // Penanda tampil di home
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

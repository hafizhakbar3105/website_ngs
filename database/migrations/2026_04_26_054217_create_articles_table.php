<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('articles', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('slug')->unique(); // Untuk URL ramah SEO
        $table->string('thumbnail');      // Gambar utama
        $table->text('content');          // Isi tulisan panjang
        $table->json('gallery')->nullable(); // Untuk menyimpan banyak foto dokumentasi
        $table->boolean('is_highlight')->default(false); // Penentu masuk kotak besar di Home
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('brand');
            $table->string('badge')->nullable();
            $table->string('name');
            $table->text('description');
            $table->string('image');
            $table->boolean('is_featured')->default(true);
            $table->integer('status')->default(1);

            // RELASI KE KATEGORI
            // Baris ini akan error jika tabel 'categories' belum dibuat
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
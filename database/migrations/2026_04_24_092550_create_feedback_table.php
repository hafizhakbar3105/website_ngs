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
    Schema::create('feedback', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('company')->nullable(); // Instansi/Perusahaan
        $table->integer('rating')->default(5); // Bintang 1-5
        $table->text('message'); // Masukan teknis
        $table->boolean('is_featured')->default(false); // Penentu tampil di public atau tidak
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};

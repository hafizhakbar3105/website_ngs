<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Factories\HasFactory; // (Jika butuh HasFactory)

class Product extends Model
{
    // HasFactory taruh di dalam class jika dipakai
    // use HasFactory;

    protected $fillable = [
        'brand', 'badge', 'name', 'description', 'full_description', 
        'image', 'is_featured', 'specifications', 'brochure', 'advantages', 
        'gallery', 'category', 'status'
    ];

    protected $casts = [
        'specifications' => 'array',
        'advantages'     => 'array', 
        'gallery'        => 'array',
        // Jangan masukkan category dan status ke sini
    ];
}
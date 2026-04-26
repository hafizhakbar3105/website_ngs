<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'brand', 'badge', 'name', 'description', 'full_description', 
        'image', 'is_featured', 'specifications', 'brochure', 'advantages', 
        'gallery', 'category', 'status'
    ];

    protected $casts = [
        'specifications' => 'array',
        'advantages'     => 'array', 
        'gallery'        => 'array',
    ];
}
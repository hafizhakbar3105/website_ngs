<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $fillable = [
        'brand', 'badge', 'name', 'description', 'full_description', 
        'image', 'is_featured', 'specifications', 'brochure', 'advantages', 
        'gallery', 'category_id', 'status'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    protected $casts = [
        'specifications' => 'array',
        'advantages'     => 'array', 
        'gallery'        => 'array',
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'slug', 'thumbnail', 'content', 'gallery', 'is_highlight'];

// Casting gallery ke array agar mudah dikelola di Controller & View
protected $casts = [
    'gallery' => 'array',
];
}

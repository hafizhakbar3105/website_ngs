<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    // WAJIB: Agar gallery dibaca sebagai Array/JSON
    protected $casts = [
        'gallery' => 'array',
        'is_highlight' => 'boolean',
    ];
}
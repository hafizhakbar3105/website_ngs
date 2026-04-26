<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use HasFactory;
class Category extends Model
{
   

    // Tambahkan baris ini
    protected $fillable = ['name', 'slug'];
}

<?php

namespace App\Models;
use HasFactory;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   
    protected $fillable = ['brand', 'badge', 'name', 'description', 'image', 'is_featured'];
}

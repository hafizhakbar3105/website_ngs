<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    // Sangat Penting: Daftarkan kolom agar bisa diisi (Mass Assignment)
    protected $table = 'feedback'; 
    protected $fillable = ['name', 'company', 'rating', 'message', 'is_featured'];
}
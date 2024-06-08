<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'nama_item',
        'description',
        'categories',  // Disesuaikan dengan kolom categories di tabel
        'price',
        'stock'
    ];
}

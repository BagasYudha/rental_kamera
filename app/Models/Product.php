<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'image', 'nama_item', 'description', 'price', 'stock', 'categories'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'categories');
    }

    /**
     * fillable
     *
     * @var array
     */

}

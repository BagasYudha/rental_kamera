<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'image', 'nama_item', 'description', 'price', 'stock', 'kategori_id'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    /**
     * fillable
     *
     * @var array
     */
    // protected $fillable = [
    //     'image',
    //     'nama_item',
    //     'description',
    //     'price',
    //     'stock',
    //     'categories'
    // ];

}

<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jaminan',
        'nama_item',
        'jamAmbil',
        'tglAmbil',
        'tglKembali',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'nama_item', 'nama_item');
    }
}

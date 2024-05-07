<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = "transaksis";
    protected $primaryKey = "id";
    protected $fillsble = [
        'id','nama','jaminan','namabarang','jamAmbil','tglAmbil','tglKembali'
    ];

}

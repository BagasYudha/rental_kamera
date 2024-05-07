<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'tb_admin'; // Nama tabel di database

    protected $fillable = [
        'username', 'password' , 'token'// Kolom yang dapat diisi
    ];

    // Anda bisa menambahkan relasi atau fungsi lainnya di sini
}
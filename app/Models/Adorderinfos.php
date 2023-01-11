<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adorderinfos extends Model
{
    protected $fillable = ['id_user', 'first_name', 'email', 'address', 'jumlah_produk', 'total_harga'];
    // use HasFactory;
}

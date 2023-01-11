<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adorderproducts extends Model
{
    protected $fillable = ['order_pro_id', 'order_id', 'product_id', 'qty', 'jml'];
    // use HasFactory;
}

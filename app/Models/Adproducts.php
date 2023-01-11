<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adproducts extends Model
{
    protected $fillable = ['product_cat', 'product_brand', 'product_title', 'product_price', 'product_image', 'product_keywords'];
    // use HasFactory;
}

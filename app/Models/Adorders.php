<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adorders extends Model
{
    protected $fillable = ['user_id', 'product_id', 'qty', 'trx_id', 'p_status'];
    // use HasFactory;
}

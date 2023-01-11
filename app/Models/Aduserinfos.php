<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aduserinfos extends Model
{
    protected $fillable = ['first_name', 'last_name', 'email', 'password', 'mobile', 'address1', 'address2'];
    // use HasFactory;
}

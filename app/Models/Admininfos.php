<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admininfos extends Model
{
    protected $fillable = ['admin_name', 'admin_email', 'admin_password'];
    // use HasFactory;
}

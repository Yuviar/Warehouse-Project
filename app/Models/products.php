<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    protected $fillable = ['category_id', 'name', 'price', 'img', 'qty'];
    use HasFactory;
}

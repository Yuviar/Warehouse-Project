<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_masuk extends Model
{
    protected $fillable = ['product_id', 'supplier_id', 'qty', 'date'];
    use HasFactory;
}

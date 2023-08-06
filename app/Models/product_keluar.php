<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_keluar extends Model
{
    protected $fillable = ['product_id', 'customer_id', 'qty', 'date'];
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SizeProduct extends Model
{
    protected $fillable = ['category_id', 'product_id', 'size', 'price', 'weight'];
}

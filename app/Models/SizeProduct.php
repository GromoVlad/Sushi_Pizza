<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SizeProduct extends Model
{
    protected $fillable = ['category_id', 'product_id', 'size', 'price', 'weight'];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}

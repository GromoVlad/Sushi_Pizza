<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id','name','price','description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function topping()
    {
        return $this->belongsToMany(Topping::class, 'topping_products');
    }
}

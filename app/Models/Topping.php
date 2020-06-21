<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topping extends Model
{
    protected $fillable = ['category_id','name','price','weight'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

}

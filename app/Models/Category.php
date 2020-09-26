<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'name_db', 'image'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function topping()
    {
        return $this->hasMany(Topping::class);
    }
}

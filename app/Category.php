<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //category has a lot of products
    public function products()
    {
        return $this->hasMany(Product::class);

    }
}

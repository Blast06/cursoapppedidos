<?php

namespace App;

use App\Category;
use App\ProductImage;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //a product belongs to a category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

}

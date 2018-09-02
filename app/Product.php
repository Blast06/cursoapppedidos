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

    public function getFeaturedImageUrlAttribute()
    {
        //en caso de tener img destacada
        $featureImage = $this->images()->where('featured',true)->first();
        //si no:
        if (!$featureImage) {
        $featureImage = $this->images()->first();

        }

        if ($featureImage) {        
            return $featureImage->url; //url es el campo calculado de ProductImage
        }

        return '/images/products/default.png';


    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
//    un producto puede estar en muchos carritos de compra
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}

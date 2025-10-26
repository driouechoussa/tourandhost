<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImages;

class Products extends Model
{
    public function product_items() {
        return $this->hasMany(ProductImages::class , 'product_id' , 'id');
    }

     function firstImage() {
        return $this->hasOne(ProductImages::class, 'product_id', 'id')->orderBy('id', 'asc');
    }
}

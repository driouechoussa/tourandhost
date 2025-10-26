<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products;

class ProductImages extends Model
{
    public function product_images() {
        return $this->belongTo(Products::class , 'product_id' , 'i');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class ProductImage extends Model
{
    //
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Campo calculado para verificar si la imagen se va cargar desde archivo local ó por medio de la URL
    public function getUrlAttribute()
    {
        if(substr($this->image, 0, 4) === "http")
        {
            return $this->image;
        }

        return '/images/products/' . $this->image;
    }
}

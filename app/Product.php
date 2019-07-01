<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\category;
class Product extends Model
{
    //
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    //
    public function getFeaturedImageUrlAttribute()
    {
        $featuredImage = $this->images()->where('featured', true)->first();
        if(!$featuredImage)
        {
            $featuredImage = $this->images()->first();
        }

        // En caso de no tener alguna imagen asociada...,  la variable $featuredImage sera FALSE
        // por lo cual mostrara una imagen por defecto
        if($featuredImage)
        {
            return $featuredImage->url;
        }

        // Imagen por defecto...
        return '/images/products/default.png';
    }
}

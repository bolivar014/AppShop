<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\ProductImage;

$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        //
        'image' => $faker->imageUrl(250,250),
        'product_id' => $faker->numberBetween(1,100), // Generar registros entre 1 y 100
    ];
});

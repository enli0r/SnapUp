<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\ProductImage;
use Faker\Generator as Faker;


$factory->define(ProductImage::class, function (Faker $faker) {
    return [
        'product_id' => rand(11,20),
        'image' => 'slika2.jpg',
    ];
});

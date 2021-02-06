<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => Str::random(10),
        'sex_id' => rand(1,2),
        'type_id' => rand(1,2),
        'slug' => Str::slug(Str::random(10)),
        'description' => $faker->realText(30),
        'featured' => rand(1,2),
        'menu' => 1
    ];
});

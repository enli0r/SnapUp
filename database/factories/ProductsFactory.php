<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'parent_id' => rand(3,5),
        'name' => Str::random(10),
        'slug' => Str::slug(Str::random(10)),
        'sex' => $faker->randomElement(['m', 'f']),
        'description' => $faker->realText(30),
        'featured' => rand(1,2),
        'image' => 'slika1.jpg',
        'menu' => 1
    ];
});

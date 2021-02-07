<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'male',
            'slug' => Str::slug('male'),
        ]);

        Category::create([
            'name' => 'female',
            'slug' => Str::slug('female'),
        ]);

        Category::create([
            'name' => 'clothes',
            'slug' => Str::slug('clothes'),
            'sex' => 'u',
        ]);

        Category::create([
            'name' => 'shoes',
            'slug' => Str::slug('shoes'),
            'sex' => 'u',
        ]);

        Category::create([
            'name' => 'accessories',
            'slug' => Str::slug('accessories'),
            'sex' => 'u',
        ]);

        
    }
}

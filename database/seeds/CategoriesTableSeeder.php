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
            'parent_id' => 1,
            'slug' => Str::slug('male clothes', '-'),
        ]);

        Category::create([
            'name' => 'clothes',
            'parent_id' => 2,
            'slug' => Str::slug('female clothes', '-'),
        ]);

        Category::create([
            'name' => 'shoes',
            'parent_id' => 1,
            'slug' => Str::slug('male shoes', '-'),
        ]);

        Category::create([
            'name' => 'shoes',
            'parent_id' => 2,
            'slug' => Str::slug('female shoes', '-'),
        ]);
    }
}

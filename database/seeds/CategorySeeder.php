<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'casual',
            'slug' => 'casual',
            'is_featured' => 1,
            'image' => 'https://i.ibb.co/0JKP8r6/category-1.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => 'lifestyle',
            'slug' => 'lifestyle',
            'is_featured' => 1,
            'image' => 'https://i.ibb.co/W6L2tts/category-2.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => 'sport',
            'slug' => 'sport',
            'is_featured' => 1,
            'image' => 'https://i.ibb.co/5KKrnC0/category-3.jpg',
        ]);

        DB::table('categories')->insert([
            'name' => 'men',
            'slug' => 'men',
            'is_featured' => 0,
            'image' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'women',
            'slug' => 'women',
            'is_featured' => 0,
            'image' => null
        ]);

        DB::table('categories')->insert([
            'name' => 'clothes',
            'slug' => 'men-clothes',
            'is_featured' => 0,
            'image' => null,
            'parent_id' => 4
        ]);

        DB::table('categories')->insert([
            'name' => 'clothes',
            'slug' => 'women-clothes',
            'is_featured' => 0,
            'image' => null,
            'parent_id' => 5
        ]);
    }
}

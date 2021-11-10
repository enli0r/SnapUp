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
            'name' => 'clothes',
            'slug' => 'clothes',
            'is_featured' => 0,
            'image' => null,
        ]);

        DB::table('categories')->insert([
            'name' => 'jackets',
            'slug' => 'jackets',
            'is_featured' => 0,
            'image' => null,
            'parent_id' => 6
        ]);

        DB::table('categories')->insert([
            'name' => 't-shirts',
            'slug' => 't-shirts',
            'is_featured' => 0,
            'image' => null,
            'parent_id' => 6
        ]);

        DB::table('categories')->insert([
            'name' => 'footwear',
            'slug' => 'footwear',
            'is_featured' => 0,
            'image' => null,
        ]);

        DB::table('categories')->insert([
            'name' => 'shoes',
            'slug' => 'shoes',
            'is_featured' => 0,
            'image' => null,
            'parent_id' => 9
        ]);

        DB::table('categories')->insert([
            'name' => 'boots',
            'slug' => 'boots',
            'is_featured' => 0,
            'image' => null,
            'parent_id' => 9
        ]);
    }
}

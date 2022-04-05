<?php

use App\Product;
use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //T-Shirts
        DB::table('category_product')->insert([
            'product_id' => 1,
            'category_id' => 8,
        ]);

        DB::table('category_product')->insert([
            'product_id' => 4,
            'category_id' => 8,
        ]);

        DB::table('category_product')->insert([
            'product_id' => 6,
            'category_id' => 8,
        ]);
        //

        //Shoes
        DB::table('category_product')->insert([
            'product_id' => 2,
            'category_id' => 10,
        ]);
   

        DB::table('category_product')->insert([
            'product_id' => 5,
            'category_id' => 10,
        ]);
        //
        

        //Jackets
        DB::table('category_product')->insert([
            'product_id' => 9,
            'category_id' => 7,
        ]);

        DB::table('category_product')->insert([
            'product_id' => 10,
            'category_id' => 7,
        ]);
        //


        //Boots
        DB::table('category_product')->insert([
            'product_id' => 7,
            'category_id' => 11,
        ]);

        DB::table('category_product')->insert([
            'product_id' => 8,
            'category_id' => 11,
        ]);
        //


        //Pants
        DB::table('category_product')->insert([
            'product_id' => 3,
            'category_id' => 12,
        ]);
        //

        //Men women
        foreach(Product::all() as $product){
            DB::table('category_product')->insert([
                'product_id' => $product->id,
                'category_id' => rand(1,2),
            ]);
        }
    }
}

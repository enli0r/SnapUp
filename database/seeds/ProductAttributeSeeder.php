<?php

use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();

        foreach($products as $product){
            DB::table('product_attributes')->insert([
                'product_id' => $product->id,
                'attribute_id' => 1
            ]);

            DB::table('product_attributes')->insert([
                'product_id' => $product->id,
                'attribute_id' => 2
            ]);
        }
    }
}

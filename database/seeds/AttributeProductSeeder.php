<?php

use App\Product;
use App\Attribute;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();
        $attributes = Attribute::all();
        
        foreach($products as $product){
            foreach($attributes as $attribute){
                DB::table('attribute_product')->insert([
                    'product_id' => $product->id,
                    'attribute_id' => $attribute->id,
                ]);
        }
        }
        
    }
}

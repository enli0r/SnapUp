<?php

use App\Product;
use App\Attribute;
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
        $attributes = Attribute::all();
        
        foreach($products as $product){
            foreach($attributes as $attribute){
                foreach($attribute->values as $value){
                    DB::table('product_attributes')->insert([
                        'product_id' => $product->id,
                        'attribute_id' => $attribute->id,
                        'value' => $value->value,
                    ]);
                }
            }
        }
        
    }
}

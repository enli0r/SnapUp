<?php

use App\AttributeProduct;
use App\AttributeValue;
use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeValueAttributeProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $attributeProducts = AttributeProduct::all();

        foreach($attributeProducts as $attributeProduct){
            $attributeValues = AttributeValue::where('attribute_id', $attributeProduct->attribute_id)->get();

            foreach($attributeValues as $attributeValue){
                DB::table('attribute_value_attribute_product')->insert([
                    'attribute_product_id' => $attributeProduct->id,
                    'attribute_value_id' => $attributeValue->id,
                ]);
            }
            
        }
    }
}

<?php

use App\AttributeValue;
use App\ProductAttribute;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeValueProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productAttributes = ProductAttribute::all();
        $attributeValues = AttributeValue::all();

        foreach($productAttributes as $productAttribute){
            foreach($attributeValues as $attributeValue){
                DB::table('attribute_value_product_attributes')->insert([
                    'product_attribute_id' => $productAttribute->id,
                    'attribute_value_id' => $attributeValue->id
                ]);
            }
        }
    }
}

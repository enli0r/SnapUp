<?php

use Illuminate\Database\Seeder;
use App\AttributeValue;

class AttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = ['black', 'red', 'blue'];
        $sizes = ['small', 'medium','large'];

        foreach($colors as $color){
            AttributeValue::create([
                'attribute_id' => 1,
                'value' => $color,
                'price' => null,
            ]);
        }

        foreach($sizes as $size){
            AttributeValue::create([
                'attribute_id' => 2,
                'value' => $size,
                'price' => null,
            ]);
        }
        
    }
}

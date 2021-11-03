<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizes = ['small', 'medium', 'large'];
        $colors = ['black', 'red', 'blue'];

        foreach($sizes as $size){
            DB::table('attribute_values')->insert([
                'attribute_id' => 1,
                'value' => $size,
                'price' => null
            ]);
        }

        foreach($colors as $color){
            DB::table('attribute_values')->insert([
                'attribute_id' => 2,
                'value' => $color,
                'price' => null
            ]);
        }
    }
}

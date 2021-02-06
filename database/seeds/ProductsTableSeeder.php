<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::create([
        //     'name' => 'root',
        //     'sex_id' => 1,
        //     'type_id' => 1,
        //     'slug' => 'root',
        //     'description' => 'root',
        //     'featured' => 0,
        //     'menu' => 0
        // ]);


        factory('App\Product', 10)->create();
    }
}

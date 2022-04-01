<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Red T-Shirt',
            'code' => '123123',
            'price' => 30.00,
            'online_price' => 25.00,
            'quantity' => 5,
            'is_featured' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'HRX Sneakers',
            'code' => '123124',
            'price' => 100.00,
            'online_price' => 90.00,
            'quantity' => 4,
            'is_featured' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Gray pants',
            'code' => '123125',
            'price' => 60.00,
            'online_price' => 53.00,
            'quantity' => 5,
            'is_featured' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Blue T-Shirt',
            'code' => '123126',
            'price' => 50.00,
            'online_price' => 46.00,
            'quantity' => 5,
            'is_featured' => 1
        ]);

        /////////////

        DB::table('products')->insert([
            'name' => 'Gray Shoes',
            'code' => '123123123',
            'price' => 80.00,
            'online_price' => 25.00,
            'quantity' => 5,
            'is_featured' => 0
        ]);

        DB::table('products')->insert([
            'name' => 'Puma T-Shirt',
            'code' => '12312123125',
            'price' => 40.00,
            'online_price' => 37.00,
            'quantity' => 5,
            'is_featured' => 0
        ]);



        ////////////////boots

        DB::table('products')->insert([
            'name' => 'Casual Boots',
            'code' => '12312412312312312',
            'price' => 100.00,
            'online_price' => 90.00,
            'quantity' => 4,
            'is_featured' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'Classic Boots',
            'code' => '1231412312312312',
            'price' => 100.00,
            'online_price' => 90.00,
            'quantity' => 4,
            'is_featured' => 1
        ]);


        //jackets
        DB::table('products')->insert([
            'name' => 'Black Jacket',
            'code' => '12312345566333',
            'price' => 5.00,
            'online_price' => 4.65,
            'quantity' => 5,
            'is_featured' => 0
        ]);

        DB::table('products')->insert([
            'name' => 'Red Jacket',
            'code' => '123126333123333',
            'price' => 5.00,
            'online_price' => 4.65,
            'quantity' => 5,
            'is_featured' => 0
        ]);

    }
}

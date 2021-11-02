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
            'name' => 'red t-shirt',
            'code' => '123123',
            'price' => 30.00,
            'online_price' => 25.00,
            'quantity' => 5,
            'is_featured' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'sneakers',
            'code' => '123124',
            'price' => 100.00,
            'online_price' => 90.00,
            'quantity' => 4,
            'is_featured' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'sweatsuit',
            'code' => '123125',
            'price' => 60.00,
            'online_price' => 53.00,
            'quantity' => 5,
            'is_featured' => 1
        ]);

        DB::table('products')->insert([
            'name' => 'blue-tshirt',
            'code' => '123126',
            'price' => 50.00,
            'online_price' => 46.00,
            'quantity' => 5,
            'is_featured' => 1
        ]);

        /////////////

        DB::table('products')->insert([
            'name' => 'grey shoes',
            'code' => '123123123',
            'price' => 80.00,
            'online_price' => 25.00,
            'quantity' => 5,
            'is_featured' => 0
        ]);

        DB::table('products')->insert([
            'name' => 'puma t shirt',
            'code' => '12312123125',
            'price' => 40.00,
            'online_price' => 37.00,
            'quantity' => 5,
            'is_featured' => 0
        ]);

        DB::table('products')->insert([
            'name' => 'socks',
            'code' => '123126333',
            'price' => 5.00,
            'online_price' => 4.65,
            'quantity' => 5,
            'is_featured' => 0
        ]);

        DB::table('products')->insert([
            'name' => 'watch',
            'code' => '123126222',
            'price' => 500.00,
            'online_price' => 475.00,
            'quantity' => 5,
            'is_featured' => 0
        ]);

    }
}

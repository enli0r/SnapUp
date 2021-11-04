<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_images')->insert([
            'product_id' => 1,
            'url' => 'https://i.ibb.co/wCkTCqm/product-1.jpg'
        ]);

        DB::table('product_images')->insert([
            'product_id' => 2,
            'url' => 'https://i.ibb.co/Vt8HVrm/product-2.jpg'
        ]);

        DB::table('product_images')->insert([
            'product_id' => 3,
            'url' => 'https://i.ibb.co/mC70cDV/product-3.jpg'
        ]);

        DB::table('product_images')->insert([
            'product_id' => 4,
            'url' => 'https://i.ibb.co/nPngqmg/product-4.jpg'
        ]);

        ////////

        DB::table('product_images')->insert([
            'product_id' => 5,
            'url' => 'https://i.ibb.co/XYLXN7Q/product-5.jpg'
        ]);

        DB::table('product_images')->insert([
            'product_id' => 6,
            'url' => 'https://i.ibb.co/0hR39CQ/product-6.jpg'
        ]);

        DB::table('product_images')->insert([
            'product_id' => 7,
            'url' => 'https://i.ibb.co/VDdCnDn/product-7.jpg'
        ]);

        DB::table('product_images')->insert([
            'product_id' => 8,
            'url' => 'https://i.ibb.co/M2Qky9p/product-8.jpg'
        ]);
    }
}

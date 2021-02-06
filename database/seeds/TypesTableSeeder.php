<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'cat_id' => 2,
            'name' => 'clothes'
        ]);

        Type::create([
            'cat_id' => 2,
            'name' => 'shoes'
        ]);
    }
}

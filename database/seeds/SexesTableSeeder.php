<?php

use Illuminate\Database\Seeder;
use App\Sex;

class SexesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sex::create([
            'cat_id' => 1,
            'name' => 'male',
        ]);

        Sex::create([
            'cat_id' => 1,
            'name' => 'female',
        ]);
    }
}

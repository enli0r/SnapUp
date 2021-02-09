<?php

use Illuminate\Database\Seeder;
use App\Attribute;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attribute::create([
            'name' => 'Size',
            'code' => 'size',
            'is_required' => 1
        ]);

        Attribute::create([
            'name' => 'Color',
            'code' => 'color',
            'is_required' => 1
        ]);
    }
}

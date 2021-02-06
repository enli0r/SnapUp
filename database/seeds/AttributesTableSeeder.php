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
            'code' => 'color',
            'name' => 'Color',
            'frontend_type' => 'select',
            'is_filterable' => 1,
            'is_required' => 1
        ]);

        Attribute::create([
            'code' => 'size',
            'name' => 'Size',
            'frontend_type' => 'select',
            'is_filterable' => 1,
            'is_required' => 1
        ]);
    }
}

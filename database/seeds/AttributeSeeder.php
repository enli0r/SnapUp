<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attributes')->insert([
            'code' => 'size',
            'name' => 'Size',
            'is_filterable' => 1,
            'is_required' => 1
        ]);

        DB::table('attributes')->insert([
            'code' => 'color',
            'name' => 'Color',
            'is_filterable' => 1,
            'is_required' => 1
        ]);
    }
}

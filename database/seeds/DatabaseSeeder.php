<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Kada se seeduje onda se izvrsava ovaj kod
        $this->call('CategoriesTableSeeder'); 
        $this->call('ProductsTableSeeder');
        // $this->call('AttributesTableSeeder');
        // $this->call('AdminTableSeeder');
    }
}

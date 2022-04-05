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
        $this->call('CategorySeeder'); 
        $this->call('ProductSeeder'); 
        $this->call('ProductImageSeeder'); 
        $this->call('AttributeSeeder');
        $this->call('AttributeValueSeeder');
        $this->call('AttributeProductSeeder'); 
        $this->call('CategoryProductSeeder'); 
        $this->call('TestimonialSeeder');   
        $this->call('AttributeValueAttributeProductSeeder');
    }
}

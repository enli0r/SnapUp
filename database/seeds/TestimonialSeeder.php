<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'name' => 'Herman Hesse',
            'image' => 'https://i.ibb.co/8D9DktQ/hesse.jpg',
            'description' => 'He saw merchants trading, princes hunting, mourners wailing for their dead, who**s offering themselves, physicians trying to help the sick, priests determining the most suitable day for seeding, lovers loving, mothers nursing their children—and all of this was not worthy of one look from his eye, it all lied, it all stank, it all stank of lies, it all pretended to be meaningful and joyful and beautiful, and it all was just concealed putrefaction. The world tasted bitter. Life was torture'
        ]);

        DB::table('testimonials')->insert([
            'name' => 'Aldus Huxley',
            'image' => 'https://i.ibb.co/kmwVbYY/huxley.jpg',
            'description' => 'But I don’t want comfort. I want God, I want poetry, I want real danger, I want freedom, I want goodness. I want sin.'
        ]);

        DB::table('testimonials')->insert([
            'name' => 'Fyodor Dostoyevsky',
            'image' => 'https://i.ibb.co/jfypcNW/dostoyevski.jpg',
            'description' => "All men are divided into 'ordinary' and 'extraordinary.' Ordinary men have to live in submission and have no right to transgress the law, because, don't you see, they are ordinary. But extraordinary men have a right to commit any crime and transgress the law in any way, just because they are extraordinary."
        ]);

    }
}

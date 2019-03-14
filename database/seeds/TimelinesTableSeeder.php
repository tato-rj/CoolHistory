<?php

use Illuminate\Database\Seeder;
use App\Timeline;

class TimelinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Timeline::create([
            'slug' => str_slug('88 keys'),
        	'title' => '88 keys',
        	'subtitle' => 'A brief history of the piano'
        ]);

        Timeline::create([
            'slug' => str_slug('Nicknames explained'),
            'title' => 'Nicknames explained',
            'subtitle' => 'Classical music\'s most famous nicknames'
        ]);
    }
}

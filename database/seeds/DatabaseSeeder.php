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
        $this->call(TimelinesTableSeeder::class);
        $this->call(FramesTableSeeder::class);
        $this->call(MediaTableSeeder::class);
    }
}

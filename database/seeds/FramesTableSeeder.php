<?php

use Illuminate\Database\Seeder;
use App\{Timeline, Frame};

class FramesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Timeline::find(1)->frames()->saveMany([
			new Frame([
				'background' => 'blue',
				'date' => '1720', 
				'content' => 'Bartolomeo Cristofori introduced the first hammer-action pianoforte, and is credited by many as the “inventor” of the piano'
			]),
			new Frame([
				'background' => 'teal',
				'date' => '1760', 
				'content' => 'The square piano was introduced by Johannes Zumpe in London, England'
			]),
			new Frame([
				'background' => 'pink',
				'date' => '1780', 
				'content' => 'The Stein and Stein-Streicher piano hammer changes improved the tone of grand pianos and were preferred by many contemporary composers'
			]),
			new Frame([
				'background' => 'green',
				'date' => '1811', 
				'content' => 'Several European manufacturers introduced upright pianos. Wornum’s upright became popular for its improved sound quality from others'
			]),
			new Frame([
				'background' => 'orange',
				'date' => '1855', 
				'content' => 'Steinway & Sons introduced the first square piano with a new scale that revolutionized the sound quality and was adopted by all future manufacturers'
			]),
			new Frame([
				'background' => 'purple',
				'date' => '1880', 
				'content' => 'The square piano was officially “extinct” in both Europe and America. Uprights were the go-to space-saving pianos for the industrialization of urban cities'
			])
		]);
    }
}

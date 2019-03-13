<?php

use Illuminate\Database\Seeder;
use App\{Timeline, Frame, Media};

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Timeline::find(1)->frames()->find(1)->media()->saveMany([
			new Media([
				'url' => 'https://collectionapi.metmuseum.org/api/collection/v1/iiif/501788/1467363/main-image',
				'label' => 'Cristofori\'s piano',
				'description' => 'The highly complex action of the modern piano may be traced directly to his original conception.'
			]),
			new Media([
				'url' => 'https://collectionapi.metmuseum.org/api/collection/v1/iiif/501788/1467385/main-image', 
				'label' => 'Cristofori\'s piano', 
				'description' => 'The highly complex action of the modern piano may be traced directly to his original conception.'
			]),
			new Media([
				'url' => 'https://www.youtube.com/embed/A2WdjyKQ57A'
			]),
			new Media([
				'url' => 'https://collectionapi.metmuseum.org/api/collection/v1/iiif/501788/1467323/main-image', 
				'label' => 'Cristofori\'s piano', 
				'description' => 'The highly complex action of the modern piano may be traced directly to his original conception.'
			]),
			new Media([
				'url' => 'https://collectionapi.metmuseum.org/api/collection/v1/iiif/501788/1467325/main-image', 
				'label' => 'Cristofori\'s piano', 
				'description' => 'The highly complex action of the modern piano may be traced directly to his original conception.'
			])
        ]);

        Timeline::find(1)->frames()->find(2)->media()->saveMany([
			new Media([
				'url' => 'https://www.lindebladpiano.com/img/_files/zumpe-square1.jpg',
				'label' => 'Zumpe\'s square piano',
				'description' => 'This is the predecessor of the modern day upright pianos.'
			]),
			new Media([
				'url' => 'https://www.youtube.com/embed/j2JUbOmlNLA'
			])
        ]);

        Timeline::find(1)->frames()->find(3)->media()->saveMany([
			new Media([
				'url' => 'https://www.lindebladpiano.com/img/_files/streicher-action1.jpg',
				'label' => 'Stein and Stein-Streicher new piano hammer',
				'description' => 'The new hammers improved the tone of pianos and quickly became the preferred mechanism of pianists at the time.'
			])
        ]);

        Timeline::find(1)->frames()->find(4)->media()->saveMany([
			new Media([
				'url' => 'http://ids.si.edu/ids/deliveryService?id=NMAH-80-15316&max=1000',
				'label' => 'Made by John Isaac Hawkins in Philadelphia, Pennsylvania in 1801',
				'description' => 'Hawkins patented the ingenious small upright piano with a folding keyboard.'
			])
        ]);
    }
}

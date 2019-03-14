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
        Timeline::find(1)->frames()->byTitle(1720)->media()->saveMany([
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

        Timeline::find(1)->frames()->byTitle(1760)->media()->saveMany([
			new Media([
				'url' => 'https://www.lindebladpiano.com/img/_files/zumpe-square1.jpg',
				'label' => 'Zumpe\'s square piano',
				'description' => 'This is the predecessor of the modern day upright pianos.'
			]),
			new Media([
				'url' => 'https://www.youtube.com/embed/j2JUbOmlNLA'
			])
        ]);

        Timeline::find(1)->frames()->byTitle(1780)->media()->saveMany([
			new Media([
				'url' => 'https://www.lindebladpiano.com/img/_files/streicher-action1.jpg',
				'label' => 'Stein and Stein-Streicher new piano hammer',
				'description' => 'The new hammers improved the tone of pianos and quickly became the preferred mechanism of pianists at the time.'
			])
        ]);

        Timeline::find(1)->frames()->byTitle(1811)->media()->saveMany([
			new Media([
				'url' => 'http://ids.si.edu/ids/deliveryService?id=NMAH-80-15316&max=1000',
				'label' => 'Made by John Isaac Hawkins in Philadelphia, Pennsylvania in 1801',
				'description' => 'Hawkins patented the ingenious small upright piano with a folding keyboard.'
			])
        ]);

        Timeline::find(1)->frames()->byTitle(1853)->media()->saveMany([
			new Media([
				'url' => 'http://www.shullpiano.com/assets/images/Steinway_2162_hwd_2.jpg',
				'label' => 'Steinway & Sons built in 1859',
				'description' => 'The earliest known Steinway grand with original internal structure and action.'
			]),
			new Media([
				'url' => 'https://www.youtube.com/embed/dMT4rfjeJko'
			])
        ]);

        Timeline::find(1)->frames()->byTitle(1891)->media()->saveMany([
			new Media([
				'url' => 'http://ernestneuman.com/wp-content/uploads/2017/08/Carnegie-Hall.jpg',
				'label' => 'Carnegie Hall',
				'description' => 'One of the most famous musical buildings in the world.'
			]),
			new Media([
				'url' => 'http://justfunfacts.com/wp-content/uploads/2017/11/carnegie-hall-old-photo-2.jpg',
				'label' => 'Carnegie Hall',
				'description' => 'The official opening night was May 5 1891, with a concert with great Russian composer and pianist Pyotr Ilyich Tchaikovsky.'
			])
        ]);
    }
}
